<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'codecamp.ma') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/ionicons/3.0.0/css/ionicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/codecamp_theme.css') }}" />

  </head>
  <body data-spy="scroll" data-target="#navbar1" data-offset="200">
  
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" id="navbar1">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo_sm_txt.png') }}"  height="30"  width="auto"alt="">
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
    <main>
         @yield('content')
    </main>
        <footer id="footer" class="bg-dark text-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3 mb-2">
                    <h6 class="text-uppercase">Tools</h6>
                    <ul class="nav flex-column">
                        <li><a class="text-white" target="ext" rel="nofollow" href="https://themestr.app" title="Bootstrap theme builder">Themestr.app</a></li>
                        <li><a class="text-white" target="ext" rel="nofollow" href="http://themes.guide" title="Bootstrap free and pro themes">Themes.guide</a></li>
                        <li><a class="text-white" target="ext" rel="nofollow" href="http://codeply.com" title="Prototype and edit code for Bootstrap and other responsive frameworks">Codeply</a></li>
                        <li><a class="text-white" target="ext" rel="nofollow" href="http://bootply.com">Bootply</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-2">
                    <h6 class="text-uppercase">More</h6>
                    <ul class="nav flex-column">
                        <li><a class="text-white" target="_new" href="http://wdstack.com" title="The top projects, tools and apps for Web developers">WDStack</a></li>
                        <li><a class="text-white" target="_new" href="http://theme.cards">Theme.cards</a></li>
                        <li><a class="text-white" target="_new" href="http://www.bootbundle.com">BootBundle</a></li>
                        <li><a class="text-white" target="_new" title="Learn about Bootstrap 4 using this free theme" href="http://bootstrap4.guide">Bootstrap4.guide</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mb-2 text-right">
                    <h6 class="text-uppercase">Follow</h6>
                    <ul class="nav float-right">
                        <li><a class="text-white mr-2" rel="nofollow" href="http://twitter.com/ThemesGuide" title="Follow on Twitter"><i class="h1 fa fa-fw fa-twitter fa-2x ion-logo-twitter"></i></a></li>
                        <li><a class="text-white mr-2" rel="nofollow" href="https://www.facebook.com/codeply" title="Follow on Facebook"><i class="h1 fa fa-fw fa-facebook fa-2x ion-logo-facebook"></i></a></li>
                        <li><a class="text-white mr" rel="nofollow" href="https://github.com/ThemesGuide/bootstrap-themes" title="Follow on GitHub"><i class="h1 fa fa-fw fa-facebook fa-2x ion-logo-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--/row-->
        </div>
    </footer> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>