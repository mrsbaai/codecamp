@extends('layouts.app')

@section('pre')
<header class="bg-primary">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12">
                <div class="text-center m-0 vh-100 d-flex flex-column justify-content-center text-light">
                    <div class="img-fluid text-white py-3">
                        <img src="{{ asset('img/logo_transparent.png') }}" width="240" height="auto" alt="Codecamp.ma">
                     </div>

                    <h2 class="display-6">A Moroccan Community Initiative</h2>
                    <p class="lead">To highlight modern carer paths & informational technologies.</p>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mx-auto">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control form-control-lg" placeholder="your@email">
                              <div class="input-group-append">
                                <button class="btn btn-outline-light btn-lg rounded-right" type="button">Sign-up</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mx-auto">
                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-light btn-lg">
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
    </div>
</header>
@endsection




@section('content')
            <h1>This is home page</h1>
@endsection


@section('title')
: Home
@endsection
