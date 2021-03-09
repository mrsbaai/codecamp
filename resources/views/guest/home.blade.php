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
                            <h4 class="card-title text-primary">To Freelance</h4>
                            <p class="card-text">Get exposure to job opportunities, and freelance projects.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Make a potfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-hat-wizard"></i></h1>
                            <h4 class="card-title text-primary">To Learn</h4>
                            <p class="card-text">Get access to free online learning material and get notified about new online and offline events.</p>
                            <a href="#" class="btn btn-primary mt-auto copyable">Next Event</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 copyable">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h1 class="display-2 text-primary"><i class="fas fa-users"></i></h1>
                            <h4 class="card-title text-primary">For Coworking</h4>
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
            <div class="card">
                <div class="thumb-container">
                  <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Avatar" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile" data-toggle="modal" data-target="#episode1">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Best practices to build a resume, how to avoid most common mistakes and some tools to build a Good resume.</p>
                </div>
            </div>              
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="thumb-container">
                  <img class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Avatar" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Best practices to build a resume, how to avoid most common mistakes and some tools to build a Good resume.</p>
                </div>
            </div>   
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="thumb-container">
                  <img  class="card-img-top" src="https://codecamp.ma/img/thumbnail.png" alt="Avatar" class="thumb-image">
                  <div class="thumb-overlay">
                  <a href="#" class="thumb-icon" title="User Profile">
                    <i class="fa fa-play"></i>
                  </a>
                  </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Best practices to build a resume, how to avoid most common mistakes and some tools to build a Good resume.</p>
                </div>
            </div>   
        </div>


                <!--Modal: Name-->
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
                        <div class="modal-footer justify-content-center">
                          <span class="mr-4">Spread the word!</span>
                          <a type="button" class="btn-floating btn-sm btn-fb waves-effect waves-light"><svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fab fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                          <!--Twitter-->
                          <a type="button" class="btn-floating btn-sm btn-tw waves-effect waves-light"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter"></i> Font Awesome fontawesome.com --></a>
                          <!--Google +-->
                          <a type="button" class="btn-floating btn-sm btn-gplus waves-effect waves-light"><svg class="svg-inline--fa fa-google-plus-g fa-w-20" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"></path></svg><!-- <i class="fab fa-google-plus-g"></i> Font Awesome fontawesome.com --></a>
                          <!--Linkedin-->
                          <a type="button" class="btn-floating btn-sm btn-ins waves-effect waves-light"><svg class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg><!-- <i class="fab fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>

                        </div>
          
                      </div>
                      <!--/.Content-->
          
                    </div>
                  </div>
                  <!--Modal: Name-->

    </div>



</section>

@endsection


@section('title')
: Home
@endsection
