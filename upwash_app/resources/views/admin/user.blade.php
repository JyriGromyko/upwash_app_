@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>User № {{ $user->id }}</h3>
</div>



<div class="row">
    <ul>
        <li>User: {{ $user->id }}</li>
        <li>Login: {{ $user->login }}</li>
        <li>EMAIL: {{ $user->email }}</li>
        <li>Nimi: {{ $user->name }}</li>
        <li>Sukunimi: {{ $user->secondname }}</li>
        <li>Puhelin: {{ $user->phone }} </li>
        <li>Zip code: {{ $user->zip_code }} </li>
        <li>Type: {{ $user->type }}</li>
    </ul>
    <a href="{{ route('deleteUser',['id'=>$user->id]) }}">Delete</a>
</div>

@endsection
