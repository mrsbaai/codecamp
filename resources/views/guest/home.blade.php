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

                    <h2 class="display-6">The Moroccan Web Experts Community</h2>
                    <p class="lead">An Initiative to highlight <span class="typed" data-typed-items="informational technologies, modern carer paths, moroccan success stories, porductivity tools"></span></p>

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
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2"><i class="fas fa-laptop-code"></i></h1>
                            <h4 class="card-title">Find Partners</h4>
                            <p class="card-text">Get exposure to job opportunities, and freelance projects. browse profiles and find pratners to work on your new innovative ideas.</p>
                            <a href="#" class="btn btn-w mt-auto">Make a potfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2"><i class="fas fa-hat-wizard"></i></h1>
                            <h4 class="card-title">To Learn</h4>
                            <p class="card-text">Watch CodeCamp video episodes, and get notified about new online and offline events.</p>
                            <a href="#" class="btn btn-w mt-auto">Next Event</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2"><i class="fas fa-users"></i></h1>
                            <h4 class="card-title">For Coworking</h4>
                            <p class="card-text">Get access to our affordable coworking space, for a professional work envirment.</p>
                            <a href="#" class="btn btn-w mt-auto">What is coworking?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 my-auto text-center py-5">
        <h1>Episodes</h1>
    </div>


    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="thumb-container">
                  <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Play trailer" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile" data-toggle="modal" data-target="#episode1">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body bg-light">
                    <p class="card-text">How to avoid most common mistakes and some tools to build a Good resume.</p>
                    <p class="card-text"><small>Duration: 56 mins</small></p>
                </div>
            </div>              
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="thumb-container">
                  <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Play trailer" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile" data-toggle="modal" data-target="#episode2">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body bg-light">
                    <p class="card-text">How to avoid most common mistakes and some tools to build a Good resume.</p>
                    <p class="card-text"><small>Duration: 56 mins</small></p>
                </div>
            </div>              
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="thumb-container">
                  <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Play trailer" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile" data-toggle="modal" data-target="#episode3">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body bg-light">
                    <p class="card-text">How to avoid most common mistakes and some tools to build a Good resume.</p>
                    <p class="card-text"><small>Duration: 56 mins</small></p>
                </div>
            </div>              
        </div>


                <div class="modal fade" id="episode1" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
          
                      <!--Content-->
                      <div class="modal-content">
          
                        <!--Body-->
                        <div class="modal-body mb-0 p-0">
          
                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen=""></iframe>
                          </div>
          
                        </div>
          
                        <!--Footer-->
                        <div class="modal-footer justify-content-center text-center">
                            <h6 class="mt-3 mb-3">
                                To watch the <u>Full Episode</u> please <a href="{{ route('register') }}">Register</a>, and get access to all our exlusive content.
                                <br/><br/>Already have an account? Please <a href="{{ route('login') }}">Login</a>
                            </h6>
                        </div>
          
                      </div>
                      <!--/.Content-->
          
                    </div>
                </div>

                <div class="modal fade" id="episode2" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
          
                      <!--Content-->
                      <div class="modal-content">
          
                        <!--Body-->
                        <div class="modal-body mb-0 p-0">
          
                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen=""></iframe>
                          </div>
          
                        </div>
          
                        <!--Footer-->
                        <div class="modal-footer justify-content-center text-center">
                            <h6 class="mt-3 mb-3">
                                To watch the <u>Full Episode</u> please <a href="{{ route('register') }}">Register</a>, and get access to all our exlusive content.
                                <br/><br/>Already have an account? Please <a href="{{ route('login') }}">Login</a>
                            </h6>
                        </div>
          
                      </div>
                      <!--/.Content-->
          
                    </div>
                </div>

                <div class="modal fade" id="episode3" tabindex="-1" role="dialog" aria-labelledby="episode title here" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
          
                      <!--Content-->
                      <div class="modal-content">
          
                        <!--Body-->
                        <div class="modal-body mb-0 p-0">
          
                          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZA0eyrP15iI" allowfullscreen=""></iframe>
                          </div>
          
                        </div>
          
                        <!--Footer-->
                        <div class="modal-footer justify-content-center text-center">
                            <h6 class="mt-3 mb-3">
                                To watch the <u>Full Episode</u> please <a href="{{ route('register') }}">Register</a>, and get access to all our exlusive content.
                                <br/><br/>Already have an account? Please <a href="{{ route('login') }}">Login</a>
                            </h6>
                        </div>
          
                      </div>
                      <!--/.Content-->
          
                    </div>
                </div>
    </div>



            

    <div class="col-12 my-auto text-center py-5">
        <h1>Latest News
        </h1>
    </div>


    <div class="row">

        <div class="col-lg-4 mb-4">
            <div class="card bg-light h-100">
                <img class="card-img-top" src="https://codecamp.ma/img/blog.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title">MSS Episodes</h4>
                    <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                    <div class="col-12 text-right p-0">
                        <a href="/blog" class="btn btn-sm mt-auto btn-dark">Read More</a>
                    </div>      
                </div>
            </div>
        </div>        
     
                
        <div class="col-lg-4 mb-4">
            <div class="card bg-light h-100">
                <img class="card-img-top" src="https://codecamp.ma/img/blog.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title">MSS Episodes</h4>
                    <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                    <div class="col-12 text-right p-0">
                        <a href="/blog" class="btn btn-sm mt-auto btn-dark">Read More</a>
                    </div>      
                </div>
            </div>
        </div>        
     
               
        <div class="col-lg-4 mb-4">
            <div class="card bg-light h-100">
                <img class="card-img-top" src="https://codecamp.ma/img/blog.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                    <h4 class="card-title">MSS Episodes</h4>
                    <p class="card-text">In Moroccan Success Story episodes, we invite a Moroccan icon in the IT and related fields, to share their experiences, lessons learned and knowledge with the Moroccan community.</p>
                    <div class="col-12 text-right p-0">
                        <a href="/blog" class="btn btn-sm mt-auto btn-dark">Read More</a>
                    </div>      
                </div>
            </div>
        </div>        
     


    </div>

    <div class="col-12 py-3"></div>
    <img class="img-fluid" src="{{ asset('img/guest/codecamp_0.PNG') }}">
    <div class="col-12 py-2"></div>
   
</section>

@endsection


@section('bottom')
<script src="{{ asset('js/typed.js/typed.min.js') }}" ></script>
<script>
    /**
 * Template Name: MyResume - v2.1.0
 * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function($) {
    "use strict";

    // Hero typed
    if ($('.typed').length) {
        var typed_strings = $(".typed").data('typed-items');
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 80,
            backSpeed: 40,
            backDelay: 2000
        });
    }

})(jQuery);
</script>
@endsection

@section('title')
: Home
@endsection
