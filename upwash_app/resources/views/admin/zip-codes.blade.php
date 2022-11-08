@extends('layouts.layadmin')

@section('content')

    <div class="row">
        <h3>Postinumerot</h3>
    </div>

    <div class="row">
        <form action="{{ route('zip-codes-store') }}" method="POST">
            @csrf
            <input type="text" name="code" placeholder="Postinumerot" style="margin-bottom: 10px" required>
            <input type="text" name="price" placeholder="Hinta" style="margin-bottom: 10px" required value="0">
            <input type="submit" value="Tallenna" style="width: 120px; height: 35px; border: none; background: #FF6600; color: #FFF; margin-top: 10px; cursor: pointer">
        </form>
    </div>

    @foreach($zipCodes as $zipCode)
        <div class="row">
            <a href="{{ route('zip-codes-show',['id'=>$zipCode->id]) }}">{{ $zipCode->code }}</a>
        </div>
    @endforeach

@endsection
