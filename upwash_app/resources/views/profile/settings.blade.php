@extends('layouts.layprofile')

@section('content')

<div class="profile-row">
    <a href="{{ route('profile') }}">Takaisin</a>
</div>


<div class="profile-row">
    <h2 class="Lato">Yhteystiedot</h2>
    <form action="{{ route('setSettings') }}" method="post">
        @csrf
        <p>Nimi:</p>
        <input type="text" name="name" value="@if($data->name != "0") {{ $data->name }} @endif">
        <p>Sukunimi:</p>
        <input type="text" name="secondname" value="@if($data->secondname != "0") {{ $data->secondname }} @endif">
        <p>Sähköposti:</p>
        <input type="text" name="email" value="@if($data->email != "0") {{ $data->email }} @endif">
        <p>Puhelin:</p>
        <input type="text" name="phone" value="@if($data->phone != "0") {{ $data->phone}} @endif">
        @if($data->type == 'washer')
            <p>Aloitusaika</p>
            <input type="text" name="start_time" value="@if($data->start_time) {{ $data->start_time}} @endif">
            <p>Päättymisaika</p>
            <input type="text" name="end_time" value="@if($data->end_time) {{ $data->end_time}} @endif">
        @endif
        <input type="submit" value="Tallenna">
    </form>
</div>

@endsection

