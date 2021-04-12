@extends('layouts.dashboard')

@section('content')

<div class="contaner p-0 m-0 bg-dark">
<div class="text-center m-5">
    <h3 class="text-light">TETOUAN <span class="text-green">- (live)</span></h3>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4 text-center">
        <iframe width="290" height="240" src="https://rtsp.me/embed/RRiH8zAF/" frameborder="0"></iframe> 
    </div>
    <div class="col-lg-5 mb-4 text-center">
        <iframe width="290" height="240" src="https://rtsp.me/embed/y3dHDeke/" frameborder="0"></iframe>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4 text-center">
        <iframe width="290" height="240" src="https://rtsp.me/embed/ibDNddKz/" frameborder="0"></iframe>      
    </div>
    <div class="col-lg-5 mb-4 text-center">
        <iframe width="290" height="240" src="https://rtsp.me/embed/EnQ5ehkK/" frameborder="0"></iframe>
    </div>
</div>
</div>

@endsection


@section('title')
Live Feed
@endsection
