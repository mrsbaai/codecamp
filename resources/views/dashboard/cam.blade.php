@extends('layouts.dashboard')

@section('content')
<div class="text-center m-5">
    <h3>Tetouan - <span class="text-green">Live</span></h3>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
        <iframe width="290" height="240" src="https://rtsp.me/embed/RRiH8zAF/" frameborder="0"></iframe> 
    </div>
    <div class="col-lg-5 mb-4">
        <iframe width="290" height="240" src="https://rtsp.me/embed/y3dHDeke/" frameborder="0"></iframe>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
        <iframe width="290" height="240" src="https://rtsp.me/embed/ibDNddKz/" frameborder="0"></iframe>      
    </div>
    <div class="col-lg-5 mb-4">
        <iframe width="290" height="240" src="https://rtsp.me/embed/EnQ5ehkK/" frameborder="0"></iframe>
    </div>
</div>

@endsection


@section('title')
Live Feed
@endsection
