@extends('layouts.dashboard')
@include('sections.coworkingLocations')
@include('sections.coworkingPlans')

@section('content')
@yield('plans')
@endsection


@section('title')
Become a member
@endsection
