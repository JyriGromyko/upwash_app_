@extends('layouts.layprofile')

@section('content')



<div class="profile-row">
    <h2>Tilaus № {{ $order->id }}</h2>
</div>

<div class="profile-row">
    <ul>
        <li>Nimi: {{ $order->name }}</li>
        <li>Sukunimi: {{ $order->secondname }}</li>
        <li>Email: {{ $order->email }} </li>
        <li>Puhelin: {{ $order->phone }}</li>
        <li>Numero: {{ $order->registrar }}</li>
        <li>Osoite: {{ $order->adress }}</li>
        <li>Päivä: {{ $order->time_d }}</li>
        <li>Kuukausi {{ $order->time_m }}</li>
        <li>Aika: {{ $order->time }}</li>
        <li>Auto: {{ $order->car_type }}</li>
        <li>Tilaus: {{ $order->order_type }}</li>
        <li>Hinta: {{ $order->price }} €</li>
        <li>Kommentti: {{ $order->comment }}</li>
        <li>Kuponki: {{ $order->cupon }}</li>
        <li>Postinumero: {{ $order->postal_code }}</li>
    </ul>
</div>

<div class="profile-row">
    <a href="{{ route('profile')}}">Takaisin</a>
</div>

@if($order->checked == 0 && $data->type == "washer")
<div class="profile-row">
    <a href="{{ route('takeOrder',['id'=>$order->id]) }}">Varaa asiakas itsellesi</a>
</div>
@endif


@if($order->checked != 0 && $order->checked != 2 && $data->type == "washer" && $order->checked != session('auth'))
<div class="profile-row">
    <a href="{{ route('closeOrder',['id'=>$order->id]) }}">Sulje</a>
</div>
@endif


@if($order->checked == session('auth'))
<div class="profile-row">
    <h1>Closed</h1>
</div>
@endif

@endsection
