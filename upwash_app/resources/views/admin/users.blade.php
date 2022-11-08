@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>Luo pesijätili</h3>
</div>

<div class="row">
    <form action="{{ route('addUser') }}" method="POST">
        @csrf
        <input type="text" name="login" placeholder="Login" style="margin-bottom: 10px" required>
        <input type="text" name="email" placeholder="Email" style="margin-bottom: 10px" required>
        <input type="text" name="adress" placeholder="postikoodi" style="margin-bottom: 10px" required>
        <input type="text" name="zip_code" placeholder="Postinumero (Separaattori ,)" style="margin-bottom: 10px" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit" value="Save" style="width: 120px; height: 35px; border: none; background: #FF6600; color: #FFF; margin-top: 10px; cursor: pointer">
    </form>
</div>

<div class="row">
    <h3>Kaikki käyttäjät</h3>
</div>

@foreach($users as $user)
<div class="row">
    <a href="{{ route('user',['id'=>$user->id]) }}">User № {{ $user->id }}</a>
</div>
@endforeach

@endsection
