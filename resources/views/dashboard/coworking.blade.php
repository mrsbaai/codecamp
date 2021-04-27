@extends('layouts.dashboard')
@include('sections.coworking')
@include('sections.coworkingLocations')

@section('content')
    @yield('coworking')
    @yield('locations')
@endsection


@section('title')
What is Coworking?
@endsection
