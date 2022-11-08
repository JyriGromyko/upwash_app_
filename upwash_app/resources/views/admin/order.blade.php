@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>Tilaus № {{ $order->id }}</h3>
</div>

<div class="row">
    <ul>
        <li>Nimi: {{ $order->name }}</li>
        <li>Sukunimi: {{ $order->secondname }}</li>
        <li>Email: {{ $order->email }} </li>
        <li>Puhelin: {{ $order->phone }}</li>
        <li>Auton numero: {{ $order->registrar }}</li>
        <li>Adress: {{ $order->adress }}</li>
        <li>Päivä: {{ $order->time_d }}</li>
        <li>Kuukausi: {{ $order->time_m }}</li>
        <li>Aika: {{ $order->time }}</li>
        <li>Auto: {{ $order->car_type }}</li>
        <li>Tilaus: {{ $order->order_type }}</li>
        <li>Hinta: {{ $order->price }} €</li>
        <li>Comment: {{ $order->comment }}</li>
        <li>Kuponki: {{ $order->cupon }}</li>
        <li>Postinumero: {{ $order->postal_code }}</li>
    </ul>
    <a href="{{ route('Porder',['id'=>$order->id]) }}">Kuitti</a>
    <a href="{{ route('deleteOrder',['id'=>$order->id]) }}">Poista</a>
</div>

@endsection
