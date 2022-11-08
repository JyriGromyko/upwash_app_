@extends('layouts.layadmin')

@section('content')

<div class="row">
    <h3>Tilaukset</h3>
</div>



@foreach($orders as $order)
<div class="row">
    <a href="{{ route('order',['id'=>$order->id]) }}">Tilaus № {{ $order->id }}</a>
</div>
@endforeach

@endsection