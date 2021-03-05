@include('footerCredit')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name') }}: @yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

   
    <link rel="stylesheet" href="{{ asset('css/codecamp_theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
                    <a href="#learnSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Learn</a>
                    <ul class="collapse list-unstyled" id="learnSubmenu">
                        <li>
                            <a href="#">Episodes</a>
                        </li>
                        <li>
                            <a href="#">Live events</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#jobSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Find a job</a>
                    <ul class="collapse list-unstyled" id="jobSubmenu">
                        <li>
                            <a href="#">Edit porfolio</a>
                        </li>
                        <li>
                            <a href="#">Preview porfolio</a>
                        </li>
                        <li>
                            <a href="#">Messages</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#coworkingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Coworking space</a>
                    <ul class="collapse list-unstyled" id="coworkingSubmenu">
                        <li>
                            <a href="#">My Subscription</a>
                        </li>
                        <li>
                            <a href="#">What is coworking?</a>
                        </li>
                        <li>
                            <a href="#">Locations</a>
                        </li>
                        <li>
                            <a href="#">Become a mumber</a>
                        </li>
                        <li>
                            <a href="#">Live feed</a>
                        </li>
                        <li>
                            <a href="#">Week Time Tracking Sheet</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
                    <ul class="collapse list-unstyled" id="settingsSubmenu">
                        <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="#">Personal info</a>
                        </li>
                        <li>
                            <a href="#">Change password</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">News</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>

                <li>
                    <a href="#">Administration</a>
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
                                <a class="nav-link" href="#">Live feed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Messages</a>
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

    <footer id="footer" class="bg-dark text-light py-5 text-center">
        @yield('footer')
        @yield('footerCredit')
    </footer> 
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>