<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use App\Models\prices;
use App\Models\clients;
use App\Models\tickets;
use App\Models\users;
use App\Models\cupons;
use App\Models\settings;

class AdminController extends Controller
{
    public function getCupons() {
        return cupons::get();
    }

    public function setMail(Request $request) {
        $param = settings::first();
        $param->mailCreate = $request->mailCreate;
        $param->mailTakeOrder = $request->mailTakeOrder;
        $param->mailFinish = $request->mailFinish;
        $param->save();

        return redirect()->route('admin');
    }

    public function admin() {
        $tickets = tickets::get();
        $cupons = cupons::get();
        $settings = settings::first();
        return view('admin.adminPage', ['tickets'=>$tickets, 'cupons'=>$cupons, 'settings'=>$settings]);
    }

    public function addUser(Request $request) {
        $user = new users;
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->name = "none";
        $user->secondname = "none";
        $user->phone = "none";
        $user->type = "washer";
        $user->zip_code = $request->zip_code;
        $user->admin = 0;
        $user->adress = $request->adress;
        $user->auto = NULL;
        $user->save();

        return redirect()->route('users');
    }

    public function prices() {
        $data = prices::where('id','=',1)->first();
        return view('admin.prices',['data'=>$data]);
    }

    public function orders() {
        $orders = clients::orderBy('id', 'DESC')->get();
        return view('admin.orders',['orders'=>$orders]);
    }

    public function tickets() {
        $tickets = tickets::orderBy('id','DESC')->get();
        return view('admin.tickets',['tickets'=>$tickets]);
    }

    public function makeCupon(Request $request) {
        $cupon = new cupons;
        $cupon->isLimit = $request->isLimit;
        $cupon->isTime = $request->isTime;
        $cupon->code = $request->code;
        $cupon->percent = $request->percent;
        $cupon->date = $request->date;
        $cupon->dateTo = $request->dateTo;
        $cupon->save();
        return redirect()->route('admin');
    }

    public function deleteCupon(int $id) {
        cupons::find($id)->delete();
        return redirect()->route('admin');
    }

    public function users() {
        $users = users::orderBy('id','DESC')->get();
        return view('admin.users',['users'=>$users]);
    }

    public function order(int $id) {
        $order = clients::where('id','=',$id)->first();
        return view('admin.order',['order'=>$order]);
    }

    public function ticket(int $id) {
        $ticket = tickets::where('id','=',$id)->first();
        return view('admin.ticket',['ticket'=>$ticket]);
    }

    public function user(int $id) {
        $user = users::where('id','=',$id)->first();
        return view('admin.user',['user'=>$user]);
    }

    public function deleteOrder(int $id) {
        clients::where('id','=',$id)->delete();
        return redirect()->route('orders');
    }

    public function deleteTicket(int $id) {
        tickets::where('id','=',$id)->delete();
        return redirect()->route('tickets');
    }

    public function deleteUser(int $id) {
        users::where('id','=',$id)->delete();
        return redirect()->route('users');
    }

    public function setPrice(Request $request) {
        $data = prices::where('id','=',1)->first();
        $data->step1_1 = $request->step1_1;
        $data->step1_2 = $request->step1_2;
        $data->step1_3 = $request->step1_3;
        $data->step3_1 = $request->step3_1;
        $data->step3_2 = $request->step3_2;
        $data->step3_3 = $request->step3_3;
        $data->step4_1 = $request->step4_1;
        $data->step4_2 = $request->step4_2;
        $data->step4_3 = $request->step4_3;
        $data->step4_4 = $request->step4_4;
        $data->step4_5 = $request->step4_5;
        $data->step5_1 = $request->step5_1;
        $data->step5_2 = $request->step5_2;
        $data->step5_3 = $request->step5_3;
        $data->step5_4 = $request->step5_4;


        // $data->step5_4 = $request->step5_4;
        // $data->step5_4 = $request->step5_4;
        // $data->step5_4 = $request->step5_4;


        $data->ulk1 = $request->ulk1;
        $data->ulk2 = $request->ulk2;
        $data->ulk3 = $request->ulk3;
        $data->sis1 = $request->sis1;
        $data->sis2 = $request->sis2;
        $data->sis3 = $request->sis3;
        $data->mol1 = $request->mol1;
        $data->mol2 = $request->mol2;
        $data->mol3 = $request->mol3;

        // Change time
        $data->ulk1_time = $request->ulk1_time;
        $data->ulk2_time = $request->ulk2_time;
        $data->ulk3_time = $request->ulk3_time;
        $data->sis1_time = $request->sis1_time;
        $data->sis2_time = $request->sis2_time;
        $data->sis3_time = $request->sis3_time;

        $data->mol1_time = $request->mol1_time;
        $data->mol2_time = $request->mol2_time;
        $data->mol3_time = $request->mol3_time;


        $data->sis1_1 = $request->sis1_1;
        $data->sis1_2 = $request->sis1_2;
        $data->sis1_3 = $request->sis1_3;
        $data->sis1_4 = $request->sis1_4;
        $data->sis1_5 = $request->sis1_5;
        $data->sis1_6 = $request->sis1_6;
        $data->sis1_7 = $request->sis1_7;
        $data->sis1_8 = $request->sis1_8;
        $data->sis1_9 = $request->sis1_9;
        $data->sis1_10 = $request->sis1_10;
        $data->sis1_11 = $request->sis1_11;
        $data->sis1_12 = $request->sis1_12;

        $data->sis2_1 = $request->sis2_1;
        $data->sis2_2 = $request->sis2_2;
        $data->sis2_3 = $request->sis2_3;
        $data->sis2_4 = $request->sis2_4;

        $data->sis3_1 = $request->sis3_1;
        $data->sis3_2 = $request->sis3_2;
        $data->sis3_3 = $request->sis3_3;

        $data->ulk1_1 = $request->ulk1_1;
        $data->ulk1_2 = $request->ulk1_2;
        $data->ulk1_3 = $request->ulk1_3;
        $data->ulk1_4 = $request->ulk1_4;
        $data->ulk1_5 = $request->ulk1_5;
        $data->ulk1_6 = $request->ulk1_6;
        $data->ulk1_7 = $request->ulk1_7;
        $data->ulk1_8 = $request->ulk1_8;
        $data->ulk1_9 = $request->ulk1_9;
        $data->ulk1_10 = $request->ulk1_10;
        $data->ulk1_11 = $request->ulk1_11;

        $data->ulk2_1 = $request->ulk2_1;
        $data->ulk2_2 = $request->ulk2_2;
        $data->ulk2_3 = $request->ulk2_3;
        $data->ulk2_4 = $request->ulk2_4;
        $data->ulk2_5 = $request->ulk2_5;
        $data->ulk2_6 = $request->ulk2_6;
        $data->ulk2_7 = $request->ulk2_7;
        $data->ulk2_8 = $request->ulk2_8;
        $data->ulk2_9 = $request->ulk2_9;
        $data->ulk2_10 = $request->ulk2_10;

        $data->ulk3_1 = $request->ulk3_1;
        $data->ulk3_2 = $request->ulk3_2;
        $data->ulk3_3 = $request->ulk3_3;
        $data->ulk3_4 = $request->ulk3_4;
        
        $data->mol1_1 = $request->mol1_1;
        $data->mol1_2 = $request->mol1_2;
        $data->mol1_3 = $request->mol1_3;
        $data->mol1_4 = $request->mol1_4;
        
        $data->mol2_1 = $request->mol2_1;
        $data->mol2_2 = $request->mol2_2;
        $data->mol2_3 = $request->mol2_3;
        $data->mol2_4 = $request->mol2_4;
        
        $data->mol3_1 = $request->mol3_1;
        $data->mol3_2 = $request->mol3_2;





        $data->save();
        return redirect()->route('prices');
    }

    public function indexOfZipCodes(){
        return view('admin.zip-codes', ['zipCodes' => ZipCode::query()->paginate(20)]);
    }

    public function storeZipCode(Request $request){
        $zipCode = new ZipCode;
        $zipCode->code = $request->code;
        $zipCode->price = $request->price;
        $zipCode->save();
        return redirect()->route('zip-codes');

    }
    public function destroyZipCode(int $id){
        ZipCode::find($id)->delete();
        return redirect()->route('zip-codes');
    }

    /**
     * Update zip code to db
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateZipCode(Request $request, int $id){
        $zipCode = ZipCode::find($id);
        $zipCode->code = $request->code;
        $zipCode->price = $request->price;
        $zipCode->save();
        return redirect()->route('zip-codes');
    }

    public function showZipCode(Request $request, int $id){
        return view('admin.zip-code-show', ['zipCode' => ZipCode::find($id)]);

    }

}
