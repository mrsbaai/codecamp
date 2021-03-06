@extends('layouts.app')

@section('pre')
<div class="bg-primary">
    <div class="container">
        <div class="row align-items-center vh-100 py-5">
            <div class="col-xl-4 col-lg-6 col mr-auto order-1 order-lg-2 align-items-center justify-content-center justify-content-lg-end d-flex">
                <div class="img-fluid text-white">
                   <img src="{{ asset('img/logo_transparent.png') }}" width="240" height="auto" alt="Codecamp.ma">
                </div>
            </div>

            <div class="col-xl-5 col-lg-6 ml-auto py-2 text-light order-last text-center text-lg-left">
                <h1 class="mb-0">
                    <span>A Moroccan Community Initiative</span>
                </h1>
                <p class="lead mb-3"><span>To highlight modern carer paths & informational technologies.</span></p>
                <a class="btn btn-outline-light btn-lg mr-2" href="http://themestr.app" target="_new">Free Account</a> 
                                                <div class="btn-group">
                              <a href="theme.css" class="btn btn-outline-light btn-lg">
                                Services
                              </a>
                              <button type="button" class="btn btn-lg btn-outline-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Services</span>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" target="new" href="{{ route('ShowJob') }}">{{ __('Find a job') }}</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" target="new" href="{{ route('ShowEvents') }}">{{ __('Live Events') }}</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" target="new" href="{{ route('ShowCoworking') }}">{{ __('Coworking') }}</a>
                              </div>
                            </div>  
            </div>

        </div>
    </div>
</div>
@endsection




@section('content')
            <h1>This is home page</h1>
@endsection


@section('title')
: Home
@endsection
