@extends('layouts.dashboard')
@include('sections.coworking')
@include('sections.coworkingPlans')

@section('content')
    @yield('coworking')
    @yield('locations')
@endsection


@section('title')
What is Coworking?
@endsection
