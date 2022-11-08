<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;

use App\Http\Controllers\MainController;

use App\Models\Users;
use App\Models\clients;
use App\Models\settings;

class UserController extends Controller
{
    public function profile() {
        $user = Users::query()->where('id', session('auth'))->first();
        $zip_codes = explode(',', $user->zip_code);

        if($user->zip_code) {
            $clients = clients::where('checked','!=','2')->whereIn('postal_code', $zip_codes)->get();
        }else{
            $clients = clients::where('checked','!=','2')->get();
        }

        if($user->start_time && $user->end_time) {
            $start_time = $user->start_time;
            $end_time = $user->end_time;

            [$user_start_hour, $user_start_minute] = explode(':', $start_time);
            [$user_end_hour, $user_end_minute] = explode(':', $end_time);

            $start_minute = $user_start_hour*60 + (int)$user_start_minute;
            $end_minute = $user_end_hour*60 + (int)$user_end_minute;

            $clients = $clients->filter(function ($item) use ($start_minute, $end_minute) {
                $time = $item->time;
                [$client_start, $client_end] = explode('-', $time);

                [$client_start_hour, $client_start_minute] = explode(':', $client_start);
                [$client_end_hour, $client_end_minute] = explode(':', $client_end);

                $client_start_minute = $client_start_hour*60 + (int)$client_start_minute;
                $client_minute = $client_end_hour*60 + (int)$client_end_minute;

                if($client_start_minute >= $start_minute && $client_minute <= $end_minute) {
                    return $item;
                }
            });

        }


        return view('profile.profile', [
            'data'=>MainController::getUserInfo(session('auth')),
            'clients'=> $clients,
            'orders'=>MainController::getClients(session('auth'))
        ]);
    }

    public function last() {
        return view('profile.last', ['data'=>MainController::getUserInfo(session('auth')), 'orders'=>MainController::getClients(session('auth'))]);
    }

    public function settings() {
        return view('profile.settings', ['data'=>MainController::getUserInfo(session('auth'))]);
    }

    public function order(int $id) {
        $data = MainController::getUserInfo(session('auth'));
        if($data->type == "washer")
            return view('profile.order', ['data'=>$data, 'order'=>MainController::getClientsInfo($id)]);
        else
            return view('profile.orderCheck', ['data'=>$data, 'order'=>MainController::getClientsInfo($id)]);
    }

    public function changeAuto(Request $request) {
        $data = MainController::getUserInfo(session('auth'));
        $data->auto = $request->auto;
        $data->save();

        return redirect()->route('profile');
    }

    public function changeAdress(Request $request) {
        $data = MainController::getUserInfo(session('auth'));
        $data->adress = $request->adress;
        $data->save();

        return redirect()->route('profile');
    }

    public function takeOrder(int $id) {
        $order = MainController::getClientsInfo($id);
        $order->checked = session('auth');
        $order->save();

        $settings = settings::first();
        $data = MainController::getUserInfo($order->from);

        $to      = $data->email;
        $subject = 'Upwash | New Order';
        $message = "

        ".$settings->mailTakeOrder." (№".$order->id.")

        ";

        if($to){
            mail($to, $subject, $message);
        }

        return redirect()->route('Porder',['id'=>$order->id]);
    }

    public function closeOrder(int $id) {
        $order = MainController::getClientsInfo($id);
        $order->checked = session('auth');
        $order->save();

        $settings = settings::first();

        $data = MainController::getUserInfo($order->from);

        $to      = $data->email;
        $subject = 'Upwash | Order info';
        $message = "

        ".$settings->mailFinish." (№".$order->id.")

        ";

        mail($to, $subject, $message);

        return redirect()->route('Porder',['id'=>$order->id]);
    }

    public function setSettings(Request $request) {
        $data = MainController::getUserInfo(session('auth'));
        $data->name = $request->name;
        $data->secondname = $request->secondname;
        $data->email = $request->email;
        $data->phone = $request->phone;
       
        if($request->start_time){
            $data->start_time = $request->start_time;
        }
        if($request->end_time){
            $data->end_time = $request->end_time;
        }

        $data->save();

        return redirect()->route('settings');
    }

    public function register(Request $request) {
        $data = Users::where('login','=',$request->login)->first();
        if($data != NULL) {
            return redirect()->route('register')->with('error', 'Invalid login or password!');
        }
        else {
            $new = new users;
            $new->login = $request->login;
            $new->password = md5($request->password);
            $new->email = $request->email;
            $new->name = 0;
            $new->secondname = 0;
            $new->type = $request->type;
            $new->save();

            session(['auth'=>$new->id]);

            return redirect()->route('profile');
        }
    }

    public function login(Request $request) {
        $data = Users::where('login','=',$request->login)->where('password','=',md5($request->password))->first();
        if($data == NULL) {
            return redirect()->route('login')->with('error','Invalid login or password!');
        }
        else {
            session(['auth'=>$data->id]);
            if($data->admin == 1) {
                return redirect()->route('admin');
            }
            else {
                return redirect()->route('profile');
            }
        }
    }
}
