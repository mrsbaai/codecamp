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
                                <button class="btn btn-outline-light btn-lg rounded-right" type="button">Get Account</button>
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

<section class="container">

    <div class="row vh-100">
        <div class="col-12 my-auto text-center pb-20">
                <h1>Why Get An Account?</h1>
        </div>
        <div class="col-12 my-auto">
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-laptop-code"></i></h1>
                            <h4 class="card-title text-primary">Freelance</h4>
                            <p class="card-text">Get exposure to job opportunities, and find freelance project to be part of.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Create a potfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-hat-wizard"></i></h1>
                            <h4 class="card-title text-primary">Learn</h4>
                            <p class="card-text">Get access to free online learning material and get notified for new online and offline events.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Events</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-users"></i></h1>
                            <h4 class="card-title text-primary">Coworking</h4>
                            <p class="card-text">Get access to our affordable coworking space, for a professional work envirment.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">What is coworking?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div></div></section>

@endsection


@section('title')
: Home
@endsection
