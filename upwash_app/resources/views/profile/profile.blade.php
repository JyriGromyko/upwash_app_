@extends('layouts.layprofile')

@section('content')

<div class="profile-row">
    <div class="profile-info">
        <div class="profile-settings-go">
            <a href="{{ route('settings') }}"><img src="https://www.svgrepo.com/show/365208/caret-right-thin.svg" alt="" style="width: 30px; height: 30px"></a>
        </div>
        <div class="profile-avatar">
            <span class="Bebas">{{ substr($data->login, 0, 1) }}</span>
        </div>
        <div class="profile-name-and-email">
            <div class="profile-name"><b class="Lato">{{ $data->login }}</b></div>
            <div class="profile-email"><span class="Lato">{{ $data->email }}</span></div>
        </div>
    </div>
</div>

<div class="profile-row">
    @if(Session::has('thanks'))
    {{ session('thanks') }}
    @endif
</div>

<div class="profile-row">
    <a href="{{ route('addTicket') }}">Lähetä tukipyyntö</a>
</div>

<div class="profile-row">
    <a href="{{ route('exit') }}">Kirjaudu ulos</a>
</div>


@if($data->type != "washer")

<div class="profile-row">
    <h2 class="Lato">Ajoneuvoni rekisterikilven nro</h2>
    <form action="{{ route('changeAuto') }}" class="form-auto" method="POST">
        @Csrf
        <input type="submit" value="+"><input type="text" name="auto" value="{{ $data->auto }}" placeholder="LISÄÄ AUTO">
    </form>
</div>

<div class="profile-row">
    <h2 class="Lato">SIJAINNIT</h2>
</div>

<div class="profile-row">
    <form action="{{ route('changeAdress') }}" class="form-auto" method="POST">
        @Csrf
        <input type="submit" value="+"><input type="text" name="adress" value="{{ $data->adress }}" placeholder="UUSI SIJAINTI">
    </form>
</div>

@endif

@if($data->type != "washer")
<div class="profile-row">
    <h2 class="Lato">Kuitit</h2>
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
        <span class="no-orders">Sinulla ei ole kuitteja.</span>
        @else

        <ul>
            @foreach($orders as $order)
            <li><a href="{{ route('Porder',['id'=>$order->id]) }}">Tilaus №{{ $order->id }}</a></li>
            @endforeach
        </ul>

        @endif
    </div>
</div>
@endif

@if($data->type == "washer")
<div class="profile-row">
    <h2 class="Lato">Asiakkaat</h2>
    <div class="profile-information-block">
        <ul>
            @foreach($clients as $client)
                @if($client->checked == 0) 
                    <li>Tilaus №<b>{{ $client->id }}</b>: <span><a href="{{ route('Porder',['id'=>$client->id]) }}">Katso tiedot</a></span></li>
                @endif
            @endforeach
        </ul>
    </div>

</div>
@endif

@if($data->type == "washer")
<div class="profile-row">
    <h2 class="Lato">Töissä</h2>
    <div class="profile-information-block">
        <ul>
            @foreach($clients as $client)
               @if($client->checked == session('auth')) 
                <li>Tilaus №<b>{{ $client->id }}</b>: <span><a href="{{ route('Porder',['id'=>$client->id]) }}">Katso tiedot</a></span></li> 
               @endif
            @endforeach
        </ul>
    </div>
</div>
@endif

@endsection