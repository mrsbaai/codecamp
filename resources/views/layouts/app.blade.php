<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'codecamp.ma') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	

    <link rel="stylesheet" href="{{ asset('css/codecamp_theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

      <!-- Font Awesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  

  </head>
  <body data-spy="scroll" data-target="#navbar1" data-offset="200">
  
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
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Find a job') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Episodes') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Live Events') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Coworking') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Contact') }}</a>
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
        <footer id="footer" class="bg-dark text-light py-5">
        <div class="container text-center">

            
            <h1 class="display-6">Stay Connected</h1>
            <p class="lead">Receive news about upcoming events</p>
     
            <div class="social-links">
                <a href="https://www.youtube.com/channel/UCjWT7ulRfJ4W0MjnGF4lyDg" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.facebook.com/CodeCamp.ma" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram/codecamp.ma" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://linkedin.com/company/code-camp-ma" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mx-auto">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="your@email">
                      <div class="input-group-append">
                        <button class="btn btn-outline-light btn-lg rounded-right" type="button">Subscribe</button>
                      </div>
                    </div>
                </div>
            </div>
 
        </div>

        
        <div class="container text-center">

            Made With <span style="color: #FF304F;"> <i class="fas fa-heart"></i> </span> At Wilaya Center ET5 N°55 TETOUAN MOROCCO
        </div>

        
    </footer> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>