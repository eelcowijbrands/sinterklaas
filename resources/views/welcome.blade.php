@extends('layout')

@section('content')

<div class="video-container">
    <video autoplay muted loop id="myVideo">
        <source src="/svg/sintzwaait.mp4" type="video/mp4">
    </video>
</div>

<div class="content">
    <h1>Hallo allemaal!</h1>
    <p>Maak snel je lijstje voor de Sint</p>
</div>


@endsection