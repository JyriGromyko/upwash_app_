<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\MainController;

use Session;
use App\Models\clients;
use App\Models\Users;
use App\Models\settings;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\StripeClient;

class ClientsController extends Controller
{
    private $stripe_key = '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';

    public function thanks(Request $request)
    {
        $stripe = new StripeClient($this->stripe_key);
        $pi_key_session = $request->session()->get('paymentIntent');
        $payment_intent = $request->get('payment_intent');

        $request->session()->forget('paymentIntent');
        
        if($pi_key_session !== $payment_intent || empty($pi_key_session)) {
            abort(403);
        }
        try {
            $stripe_detail = $stripe->paymentIntents->retrieve($payment_intent);
            
        } catch (ApiErrorException $e) {
            abort(403);
        }
        //if ($stripe_detail->status !== 'succeeded') {
        if ($stripe_detail->status !== 'requires_payment_method') {
            //abort(403);
        }
        $order = $stripe_detail->metadata;


        $user_id = session('auth');
        if (!$user_id) {
            $data = null;
            if (isset($order->email) && !empty($order->email)) {
                $data = Users::where('login', '=', $order->email)->first();
            }
            if ($data === null) {

                $session_data = json_decode($request->session()->get('order'));
                $request->session()->forget('order');

                $user = new Users();
                $user->login = $session_data->email;
                $user->password = md5($order->registrar);
                $user->type = "client";
                $user->name = $session_data->name;
                $user->secondname = $session_data->secondname ?? '';
                $user->email = $session_data->email;
                $user->phone = $session_data->phone ?? '';
                
                $user->save();
                session(['auth' => $user->id]);
                $user_id = $user->id;
            } else {
                session(['auth' => $data->id]);
                $user_id = $data->id;
            }
        }
        $session_data = json_decode($request->session()->get('order'));

        $new = new clients;
        $new->from = $user_id;

        $client = MainController::getUserInfo($user_id);
        $new->name = $client->name;
        $new->secondname = $client->secondname;
        $new->email = $client->email;
        $new->phone = $client->phone;

        $new->registrar = $session_data->num;
        $new->adress = $session_data->adress;
        $new->main_type = $session_data->main_type;
        $new->upsells = 0;
        $new->price = $session_data->price;
        $new->comment = $session_data->comment ?? '';
        $new->cupon = $session_data->cupon ?? '';
        $new->time_d = $session_data->day;
        $new->time_m = ($session_data->month ?? 0) + 1;
        $new->time = $session_data->time;
        $new->car_type = $order->car__type;
        $new->order_type = $order->order__type;
        $new->check1 = $session_data->checked1;
        $new->check2 = $session_data->checked2;
        $new->check3 = $session_data->checked3;
        $new->check4 = $session_data->checked4;
        $new->check5 = $session_data->checked5;
        $new->check6 = $session_data->checked6;
        $new->check7 = $session_data->checked7;
        $new->check8 = $session_data->checked8;
        $new->check9 = $session_data->checked9;

        $new->param1 = $order->param1;
        $new->param2 = $order->param2;
        $new->param3 = $order->param3;
        $new->param4 = $order->param4;
        $new->price1 = $order->price1;
        $new->price2 = $order->price2;
        $new->price3 = $order->price3;
        $new->price4 = $order->price4 ?? 0;
        $new->additionalPrice = $session_data->additionalPrice ?? 0;
        $new->postal_code = $session_data->postal_code ?? 0;


        $new->save();

        $this->sendToMail($new);
        return view('thanks', ['id' => $new->id]);
    }

    public function addClient(Request $request)
    {
        $settings = settings::first();
        $flag = false;
        if (!Session::has('auth')) {
            $flag = true;
            $data = Users::where('login', '=', $request->email)->first();
            if ($data != null) {
            } else {
                $user = new users;
                $user->login = $request->email;
                $user->password = md5($request->registrar);
                $user->type = "client";
                $user->name = $request->name;
                $user->secondname = $request->secondname;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->save();
                session(['auth' => $user->id]);
            }
        }


        $new = new clients;
        $new->from = session('auth');
        if ($flag) {
            $new->name = $request->name;
            $new->secondname = $request->secondname;
            $new->email = $request->email;
            $new->phone = $request->phone;
        } else {
            $client = MainController::getUserInfo(session('auth'));
            $new->name = $client->name;
            $new->secondname = $client->secondname;
            $new->email = $client->email;
            $new->phone = $client->phone;
        }
        $new->registrar = $request->registrar;
        $new->adress = $request->adress__location;
        $new->main_type = $request->main_type;
        $new->upsells = 0;
        $new->price = $request->price;
        $new->comment = $request->comment;
        $new->cupon = $request->cupon;
        $new->time_d = $request->day;
        $new->time_m = $request->month + 1;
        $new->time = $request->time;
        $new->car_type = $request->car__type;
        $new->order_type = $request->order__type;
        $new->check1 = $request->checked1;
        $new->check2 = $request->checked2;
        $new->check3 = $request->checked3;
        $new->check4 = $request->checked4;
        $new->check5 = $request->checked5;
        $new->check6 = $request->checked6;
        $new->check7 = $request->checked7;
        $new->check8 = $request->checked8;
        $new->check9 = $request->checked9;
        $new->check10 = $request->checked10;
        $new->check11 = $request->checked11;
        $new->check12 = $request->checked12;
        $new->check13 = $request->checked13;
        $new->check14 = $request->checked14;
        $new->check15 = $request->checked15;
        $new->check16 = $request->checked16;
        $new->check17 = $request->checked17;
        $new->check18 = $request->checked18;
        $new->check19 = $request->checked19;
        $new->check20 = $request->checked20;
        $new->check21 = $request->checked21;
        $new->check22 = $request->checked22;
        $new->check23 = $request->checked23;
        
        
        $new->param1 = $request->param1;
        $new->param2 = $request->param2;
        $new->param3 = $request->param3;
        $new->param4 = $request->param4;
        $new->price1 = $request->price1;
        $new->price2 = $request->price2;
        $new->price3 = $request->price3;
        $new->price4 = $request->price4;
        $new->additionalPrice = $request->additionalPrice;
        $new->postal_code = $request->postal_code ?? 0;
        // $new->priceCheck1 = $request->priceCheck1;
        // $new->priceCheck2 = $request->priceCheck2;
        // $new->priceCheck3 = $request->priceCheck3;
        $new->save();

        $to = $new->email;
        $subject = 'Upwash | Uusi tilaus ';
        $message = "

       Hei " . $new->name . ",

       " . $settings->mailCreate . "

        https://tilaus.upwash.fi/profile/order/" . $new->id . "
        ";

        mail($to, $subject, $message);

        return redirect()->route('thanks', ['id' => $new->id]);
    }

    public function sendMail(Request $request)
    {
        $to = "info@upwash.fi";
        $subject = 'Upwash | Uusi tilaus';
        $message = "

        interval: " . $request->interval . "
        where: " . $request->where . "
        amount: " . $request->amount . "

        name: " . $request->name . "
        y-tun: " . $request->ytun . "
        adress: " . $request->adress . "
        index: " . $request->index . "
        indexStreet: " . $request->indexStreet . "

        nameAndSecondname: " . $request->nameAndSecondname . "
        email: " . $request->email . "
        phone: " . $request->phone . "

        ";
        mail($to, $subject, $message);

        return redirect()->route('thanks', ["id" => -1]);
    }
    
    

    public function stripe(Request $request)
    
    {
        $Stripe  = new StripeClient($this->stripe_key);
        
        try {
            
            //GGA
            $parts = parse_url($request->order);
            parse_str($parts['path'], $query);
            unset($query['zipCodes'], $query['_token']);
            
            $paymentIntent = $Stripe->paymentIntents->create([
                'amount' => $this->calculateOrderAmount($request->get('price')),
                //'amount' => 1000,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
                'capture_method' => 'manual',
                'metadata' => array_slice($query, 0, 50),
            ]);
            
            /*ORIG
            $parts = parse_url($request->order);
            parse_str($parts['path'], $query);
            unset($query['zipCodes'], $query['_token']);
           

            $paymentIntent = PaymentIntent::create([
                //'amount' => $this->calculateOrderAmount($request->get('price')),
                'amount' => 1000,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
                'capture_method' => 'manual',
                'metadata' => $query,
            ]);
             */
            $request->session()->put('paymentIntent', $paymentIntent->id);

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Error $e) {
            return response([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    private function calculateOrderAmount($price): int
    {
        return ($price ?? 1) * 100;
    }

    protected function sendToMail($new)
    {
        $settings = settings::first();

        $to = $new->email;
        $subject = 'Upwash | Uusi tilaus';
        $message = "

       Hei " . $new->name . ",

       " . $settings->mailCreate . "

        https://tilaus.upwash.fi/profile/order/" . $new->id;

        // Send message to customer
        mail($to, $subject, $message);

        $to_admin = "info@upwash.fi";
        $subject_admin = 'Upwash | Uusi tilaus';
        $message_admin = "

        Nimi: " . $new->name . "
        Sukunimi: " . $new->secondname . "
        Email: " . $new->email . "
        Puhelinnro: " . $new->phone . "
        https://tilaus.upwash.fi/profile/order/" . $new->id;
        ////session(['auth' => $user->id]);

        // Send message to admin
        mail($to_admin, $subject_admin, $message_admin);
    }

}
