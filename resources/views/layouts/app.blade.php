@include('footerCredit')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	

    <link rel="stylesheet" href="{{ asset('css/codecamp_theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-mutate-approach="sync"></script>

    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
    
    @yield('head')
    
  </head>
  <body data-spy="scroll" data-target="#navbar1" data-offset="60">
  
    @yield('pre')

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" id="navbar1">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo_sm.png') }}" height="30" width="auto" alt="Codecamp.ma">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/job">{{ __('Find a job') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events">{{ __('Live Events') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/coworking">{{ __('Coworking') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/episodes">{{ __('Episodes') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">{{ __('Contact') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    





    <main role="main" >
       @yield('content')
    </main>






    <footer class="bg-dark text-white text-center text-md-start">



        <!-- Grid container -->
        <div class="container pt-5 pb-5">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="mb-4">Receive news about upcoming events</h5>
              <div class="input-group mb-3 pr-4 pl-4">
                <input type="text" class="form-control form-control-lg " placeholder="your@email">
                <div class="input-group-append">
                    <button class="btn btn-primary btn-lg rounded-right" type="button">Subscribe</button>
                </div>
              </div>

              <div class="container p-1 pb-0">
                <!-- Section: Social media -->
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-lg btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                ></a>
    
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-lg btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                ></a>
            
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-lg btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                ></a>
            
                <!-- Youtube -->
                <a class="btn btn-outline-light btn-lg btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-youtube"></i
                ></a>
        
                <!-- Section: Social media -->
            </div>



            </div>
            <!--Grid column-->
    

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5>Services</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                    <a class="text-white" href="/job">{{ __('Find a job') }}</a>
                </li>
                <li>
                    <a class="text-white" href="/events">{{ __('Live Events') }}</a>
                </li>
                <li>
                    <a class="text-white" href="/coworking">{{ __('Coworking') }}</a>
                </li>
                <li>
                    <a class="text-white" href="/episodes">{{ __('Episodes') }}</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5>Links</h5>
    
              <ul class="list-unstyled">
                <li>
                    <a class="text-white" href="/main">{{ __('Home') }}</a>
                </li>
                <li>
                    <a class="text-white" href="/blog">{{ __('Blog') }}</a>
                </li>
                <li>
                    <a class="text-white" href="/contact">{{ __('Contact') }}</a>
                </li>
                <li>
                    <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li>
                    @if (Route::has('register'))
                    <a class="text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->


        <!-- Copyright -->
        <div class="p-1" style="background-color: black">
           @yield('footerCredit')
        </div>
        <!-- Copyright -->
      </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>