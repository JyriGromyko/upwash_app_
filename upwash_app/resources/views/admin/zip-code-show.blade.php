@extends('layouts.layadmin')

@section('content')

    <div class="row">
        <h3>Postinumerot</h3>
    </div>

    <div class="row">
        <form action="{{ route('zip-codes-update', ['id' => $zipCode->id]) }}" method="POST">
            @csrf
            @method('put')
            <input type="text" name="code" placeholder="Postinumerot" style="margin-bottom: 10px" required value="{{ $zipCode->code }}">
            <input type="text" name="price" placeholder="Hinta" style="margin-bottom: 10px" required value="{{ $zipCode->price }}">
            <input type="submit" value="Tallenna" style="width: 120px; height: 35px; border: none; background: #FF6600; color: #FFF; margin-top: 10px; cursor: pointer">
            <a href="{{ route('zip-codes') }}">Back</a>
        </form>
    </div>

    <form action="{{ route('zip-codes-destroy', ['id' => $zipCode->id]) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" style="width: 120px; height: 35px; border: none; background: #FF6600; color: #FFF; margin-top: 10px; cursor: pointer">
    </form>

@endsection
