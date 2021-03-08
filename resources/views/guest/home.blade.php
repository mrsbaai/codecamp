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
                </div>
            </div>
        </div>
    </div>
</header>
@endsection




@section('content')
<div class="row vh-100">

    <div class="col-12 my-auto">
        <h1>Why Get An Account?</h1>
    </div>
    <div class="col-12 my-auto">
        <div class="row text-center">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 copyable">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="display-2 text-primary"><span class="ion ion-ios-snow-outline"></span></h1>
                        <h4 class="card-title text-primary">Find Work</h4>
                        <p class="card-text">Don't like that typical Bootstrap look? Each theme has a custom look-and-feel, while maximizing use of Bootstrap without extensive additional CSS &amp; JS.</p>
                        <a href="#" class="btn btn-primary mt-auto copyable">More<a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></a>
                    </div>
                <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 copyable">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="display-2 text-primary"><span class="ion ion-ios-tablet-portrait-outline"></span></h1>
                        <h4 class="card-title text-primary">Learn</h4>
                        <p class="card-text">Based on mobile-first Bootstrap 4, all themes are 100% responsive and designed to look great on everything from smartphones to tablets to desktops..</p>
                        <a href="#" class="btn btn-primary mt-auto copyable">More<a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></a>
                    </div>
                <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 copyable">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="display-2 text-primary"><span class="ion ion-ios-checkmark-circle-outline"></span></h1>
                        <h4 class="card-title text-primary">Coworking</h4>
                        <p class="card-text">Themes are crafted with care for design and performance. All themes are built on modern HTML5 &amp; CSS3 standards to ensure consistency and cross-browser support.</p>
                        <a href="#" class="btn btn-primary mt-auto copyable">More<a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></a>
                    </div>
                <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('title')
: Home
@endsection
