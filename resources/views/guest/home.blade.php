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

    <div class="row">
        <div class="col-12 my-auto text-center py-5">
                <h1>Why Get An Account?</h1>
        </div>
        <div class="col-12 my-auto">
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-laptop-code"></i></h1>
                            <h4 class="card-title text-primary">Freelance</h4>
                            <p class="card-text">Get exposure to job opportunities, and find freelance projects to be part of.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Make a potfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-hat-wizard"></i></h1>
                            <h4 class="card-title text-primary">Learn</h4>
                            <p class="card-text">Get access to free online learning material and get notified about new online and offline events.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Next Event</a>
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


    <div class="col-12 my-auto text-center py-5">
        <h1>Latest Episodes</h1>
    </div>


    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card border-primary h-100 copyable">
                <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title text-primary">Card Outline</h4>
                    <p class="card-text">Themestr.app makes it easy to customize this, and other free Bootstrap 4 themes for your downloading pleasure.</p>
                    <a href="#" class="btn btn-primary mt-auto copyable">Button<a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></a>
                </div>
            <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-primary h-100 copyable">
                <div class="card-body">
                    <div class="list-group copyable">
                        <a href="#" class="list-group-item list-group-item-action active">Dis List Group</a>
                        <a href="#" class="list-group-item list-group-item-action">Custom Colors</a>
                        <a href="#" class="list-group-item list-group-item-action">Google Fonts</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Ionicons</a>
                    <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
                </div>
            <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card bg-primary text-white h-100 copyable">
                <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title">Scrollspy</h4>
                    <p class="card-text">The top NavBar utilizes Bootstrap's Scrollspy component. You'll notice when you scroll the page the "active" nav section is highlighted.</p>
                    <a href="https://getbootstrap.com/docs/4.1/components/scrollspy/" class="btn btn-primary border-white mt-auto copyable">Read More<a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></a>
                </div>
            <a href="" class="copyable-trigger" data-original-title="" title="">&lt;&gt;</a></div>
        </div>
    </div>



</section>

@endsection


@section('title')
: Home
@endsection
