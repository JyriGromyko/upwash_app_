@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>Tukipyynnöt</h3>
</div>

@foreach($tickets as $ticket)
<div class="row">
    <a href="{{ route('ticket',['id'=>$ticket->id]) }}">Ticket № {{ $ticket->id }}</a>
</div>
@endforeach

@endsection