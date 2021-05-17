@extends('layouts.dashboard')

@section('content')


<div class="text-center m-5">
    <h3>TETOUAN <span class="text-green">- (live)</span></h3>
</div>

<div class="row justify-content-center">
    <div class="col-lg-4 mb-4 text-center">
        <iframe width="375" height="310" src="https://rtsp.me/embed/RRiH8zAF/" frameborder="0"></iframe> 
    </div>
    <div class="col-lg-4 mb-4 text-center">
        <iframe width="375" height="310" src="https://rtsp.me/embed/y3dHDeke/" frameborder="0"></iframe>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-4 mb-4 text-center">
        <iframe width="375" height="310" src="https://rtsp.me/embed/ibDNddKz/" frameborder="0"></iframe>      
    </div>
    <div class="col-lg-4 mb-4 text-center">
        <iframe width="375" height="310" src="https://rtsp.me/embed/EnQ5ehkK/" frameborder="0"></iframe>
    </div>
</div>


@endsection


@section('title')
Live Feed
@endsection
@section('head')

@endsection
