@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>Tukipyynnöt № {{ $ticket->id }}</h3>
</div>

<div class="row">
    <ul>
        <li>From: {{ $ticket->id }}</li>
        <li>Email: {{ $ticket->name }}</li>
        <li>Aihe: {{ $ticket->theme }}</li>
        <li>Text: {{ $ticket->text }} </li>
    </ul>
    <a href="{{ route('deleteTicket',['id'=>$ticket->id]) }}">Delete</a>
</div>

@endsection