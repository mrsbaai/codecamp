@extends('layouts.app')

@section('pre')
<div class="bg-primary">
    <div class="container">
        <div class="row align-items-center vh-100 py-5">
            <div class="col-xl-5 col-lg-6 ml-auto py-2 text-light order-2 text-center text-lg-left">
                <h1 class="mb-0">
                    <span>Signal</span>
                </h1>
                <p class="lead mb-3"><span>Like sailing yacht flags in a busy harbor.</span> This font face is Comfortaa. <a class="font-weight-bold text-white" href="http://themestr.app">Themestr.app</a> makes it easy to customize this, and other free Bootstrap 4 themes.</p>
                <a class="btn btn-outline-light btn-lg mr-2" href="http://themestr.app" target="_new">Customize</a> 
                                                <div class="btn-group">
                              <a href="theme.css" class="btn btn-outline-light btn-lg">
                                Download Theme
                              </a>
                              <button type="button" class="btn btn-lg btn-outline-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Downloads</span>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="theme.css">theme.css</a>
                                  <a class="dropdown-item" href="theme.min.css">theme.min.css</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="theme.scss">theme.scss</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" target="new" href="https://github.com/ThemesGuide/bootstrap-themes/tree/master/signal">Full template</a>
                              </div>
                            </div>  
            </div>
            <div class="col-xl-4 col-lg-6 col mr-auto order-1 order-lg-last align-items-center justify-content-center justify-content-lg-end d-flex">
                 <div class="img-fluid text-white">
                    <img src="{{ asset('img/logo_transparent.png') }}" width="240" height="auto" alt="Codecamp.ma">
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
