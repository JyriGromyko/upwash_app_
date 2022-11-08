<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;

use Session;
use App\Models\Users;
use App\Models\clients;
use App\Models\prices;
use App\Models\tickets;
use App\Models\cupons;

class MainController extends Controller
{
    public static function getUserInfo(int $id) { return Users::find($id); }

    public static function getClientsInfo(int $id) { return Clients::orderBy('id','DESC')->find($id);}

    public static function getClients(int $id) { return Clients::where('from','=',$id)->get();}

    public static function addTickets() {
        return view('addTicket',['data'=>self::getUserInfo(session('auth'))]);
    }

    public function sendTicket(Request $request) {
        $data = self::getUserInfo(session('auth'));

        $new = new tickets;
        $new->email = $request->email;
        $new->theme = $request->theme;
        $new->text = $request->text;
        $new->type = $data->type;
        $new->save();

        return redirect()->route('profile')->with('thanks',"Tukipyyntösi on otettu vastaan ja katsotaan mahdollisimman pian!");
    }

    public function addSession(Request $request) {
        $request->session()->forget('order');
        $request->session()->put('order', json_encode($request->except('_token', 'zipCodes'), JSON_THROW_ON_ERROR));
        return "Success";
    }
    public function index() {
        $prices = prices::where('id','=',1)->first();
        $cupons = cupons::get();
        $zip_codes = ZipCode::get();
        if(Session::has('auth')) {
            $data = self::getUserInfo(session('auth'));
            if($data == NULL){
                return view('index',[
                    'prices'=>$prices,
                    'times'=>clients::where('checked','!=','2')->get(),
                    'cupons'=>$cupons,
                    'orders' => 0,
                    'zipCodes' => $zip_codes
                    ]);

            }else{
                return view('index',[
                    'prices'=>$prices,
                    'data'=> $data,
                    'times'=>clients::where('checked','!=','2')->get(),
                    'cupons'=> $cupons,
                    'orders' => clients::where('checked','!=','2')->where('from', $data->id)->count(), 'zipCodes' => $zip_codes
                ]);
            }
        }
        else {
            
            return view('index',['prices'=>$prices,'times'=>clients::where('checked','!=','2')->get(), 'cupons'=>$cupons, 'orders' => 0, 'zipCodes' => $zip_codes]);
        }
    }
}
