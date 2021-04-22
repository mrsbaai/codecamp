@extends('layouts.app')
@include('sections.coworking')
@include('sections.coworkingLocations')
@include('sections.coworkingPlans')

@section('content')
  @yield('coworking')
  @yield('locations')
@endsection


@section('title')
: Coworking
@endsection
