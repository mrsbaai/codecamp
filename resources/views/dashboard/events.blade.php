@extends('layouts.dashboard')

@include('sections.events')
@section('content')
  @yield('events')
@endsection

@section('title')
Upcoming Events
@endsection
