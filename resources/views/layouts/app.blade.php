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
            <a class="navbar-brand mr-1 mb-1 mt-0" href="../">Bootstrap 4</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="themesDd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Themes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="themesDd">
                            
                            
                            <a class="dropdown-item px-2 active" href="../signal">Signal</a>
                            
                            <a class="dropdown-item px-2 " href="../greyson">Greyson</a>
                            
                            <a class="dropdown-item px-2 " href="../fresca">Fresca</a>
                            
                            <a class="dropdown-item px-2 " href="../darkster">Darkster</a>
                            
                            <a class="dropdown-item px-2 " href="../hello_kiddie">Hello Kiddie</a>
                            
                            <a class="dropdown-item px-2 " href="../blue_voltage">Blue Voltage</a>
                            
                            <a class="dropdown-item px-2 " href="../hootstrap">Hootstrap</a>
                            
                            <a class="dropdown-item px-2 " href="../herbie">Herbie</a>
                            
                            <a class="dropdown-item px-2 " href="../boldstrap">Boldstrap</a>
                            
                            <a class="dropdown-item px-2 " href="../lovey">Lovey</a>
                            
                            <a class="dropdown-item px-2 " href="../bootstrap_purple">Bootstrap Purple</a>
                            
                            <a class="dropdown-item px-2 " href="../monotony">Monotony</a>
                            
                            <a class="dropdown-item px-2 " href="../poypull">Poypull</a>
                            
                            <a class="dropdown-item px-2 " href="../tequila">Tequila</a>
                            
                            <a class="dropdown-item px-2" href="https://themestr.app" rel="nofollow" target="_new" title="Bootstrap theme builder">Build your own...</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="layoutDd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Layouts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="layoutDd">
                            <a class="dropdown-item px-2" href="./">Default</a>
                            <a class="dropdown-item px-2" href="./template2.html">Layout 2</a>
                            <a class="dropdown-item px-2" href="./template3.html">Layout 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buttons">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navs">Navs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cards">Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modals">Modals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#typography">Typography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#forms">Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#grid">Grid</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          More
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDd">
                            <a class="dropdown-item px-2" href="#more">Badges</a>
                            <a class="dropdown-item px-2" href="#more">Tooltips &amp; Popups</a>
                            <a class="dropdown-item px-2" href="#more">Progress &amp; Alerts</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item px-2" href="#more">All</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <main>
        <section class="container">
            <div class="row py-5">
                <div class="col-12 my-auto">
                    <div class="row text-center">
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-snow-outline"></span></h1>
                                    <h4 class="card-title text-primary">Unique</h4>
                                    <p class="card-text">Don't like that typical Bootstrap look? Each theme has a <strong>custom look-and-feel</strong>, while maximizing use of Bootstrap without extensive additional CSS & JS.</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-tablet-portrait-outline"></span></h1>
                                    <h4 class="card-title text-primary">Responsive</h4>
                                    <p class="card-text">Based on <strong>mobile-first</strong> Bootstrap 4, all themes are 100% responsive and designed to look great on everything from smartphones to tablets to desktops..</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-construct-outline"></span></h1>
                                    <h4 class="card-title text-primary">Consistent</h4>
                                    <p class="card-text">Themes are crafted with care for design and performance. Like Bootstrap, the themes are built on modern HTML5 & CSS3 standards to ensure consistency and <strong>cross-browser</strong> support.</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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