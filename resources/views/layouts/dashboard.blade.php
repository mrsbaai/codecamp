@include('sections.footerCredit')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

   
    <link rel="stylesheet" href="{{ asset('css/codecamp_theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


    <!-- Font Awesome JS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h5>{{ Auth::user()->name }}</h5>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#learnSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Learning</a>
                    <ul class="collapse list-unstyled" id="learnSubmenu">
                        <li>
                            <a href="{{ route('UserEpisodes') }}">Episodes</a>
                        </li>
                        <li>
                            <a href="{{ route('UserEvents') }}">Live events</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#jobSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Working</a>
                    <ul class="collapse list-unstyled" id="jobSubmenu">
                        <li>
                            <a href="{{ route('portfolio') }}">Edit Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('messages') }}">Messages</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#coworkingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Coworking</a>
                    <ul class="collapse list-unstyled" id="coworkingSubmenu">
                        <li>
                            <a href="{{ route('UserCoworking') }}">What Is Coworking?</a>
                        </li>
                        <li>
                            <a href="{{ route('coworkers') }}">Active Coworkers</a>
                        </li>
                        <li>
                            <a href="{{ route('RegisterCoworking') }}">Get The Keys</a>
                        </li>
                        <li>
                            <a href="{{ route('cameras') }}">View Cameras</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('UserSettings') }}">Settings</a>
                </li>

                <li>
                    <a href="{{ route('UserNews') }}">News</a>
                </li>

                <li>
                    <a href="{{ route('support') }}">Support</a>
                </li>
                <!-- if admin  -->

                <li>
                    <a href="#postesAdminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postes</a>
                    <ul class="collapse list-unstyled" id="postesAdminSubmenu">
                        <li>
                            <a href="{{ route('AdminEditEpisodes') }}">Edit Episodes</a>
                        </li>
                        <li>
                            <a href="{{ route('AdminEditEvents') }}">Edit Events</a>
                        </li>
                        <li>
                            <a href="{{ route('AdminEditNews') }}">Edit News</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#coworkingAdminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Coworking</a>
                    <ul class="collapse list-unstyled" id="coworkingAdminSubmenu">
                        
                        <li>
                            <a href="{{ route('AdminEditCoworkers') }}">Edit Coworkers</a>
                        </li>
                        <li>
                            <a href="{{ route('AdminCoworkingRequests') }}">Coworking Requests</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="#eventsAdminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Events</a>
                    <ul class="collapse list-unstyled" id="eventsAdminSubmenu">
                        <li>
                            <a href="{{ route('AdminEventSubscribers') }}">Edit Event Subscribers</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('AdminEventRequests') }}">Event Requests</a>
                        </li>
                        <li>
                            <a href="{{ route('AdminEditGuests') }}">Edit Guests</a>
                        </li>

                        
                    </ul>
                </li>





                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cameras') }}">Cameras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('messages') }}">Messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')


           
        </div>


    </div>
     
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <footer id="footer" class="bg-dark text-light text-center">
        @yield('footer')
        @yield('footerCredit')
    </footer>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>