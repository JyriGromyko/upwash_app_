@extends('layouts.layprofile')

@section('content')



<div class="profile-row">
    <a href="{{ route('profile') }}">Palaa takaisin tilin sivulle</a>
</div>

<div class="profile-row">
    <h2 class="Lato">Tilauksesi</h2>
    <div class="table-last">
        @php
        $count = 0;
        @endphp
        @foreach($orders as $order)
            @php
            $count++;
            @endphp
        @endforeach
        @if($count == 0)
        <span class="no-orders">Sinulla ei ole järjestystä.</span>
        @else

        <ul>
            @foreach($orders as $order)
            <li><a href="{{ route('Porder',['id'=>$order->id]) }}">Tilaus №{{ $order->id }}</a></li>
            @endforeach
        </ul>

        @endif
    </div>
</div>

@endsection