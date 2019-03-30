<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Laravel</title>
  
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
 <link href="../css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
 <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
 <link href="../css/bootstrap-reboot.css" rel="stylesheet" type="text/css"/>
 <link href="../css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
 <link href="../css/animate.css" rel="stylesheet" type="text/css"/>
 <link href="../fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
 <link href="../fonts/flaticon/font/flaticon.css" rel="stylesheet" type="text/css"/>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    
    <style>
           
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        a {
  text-decoration: none;
}
        
    </style>
</head>

<body id="app-layout" >
    
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                   Home
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                        
                    <li><a href="{{ url('/userProfile') }}">Profile</a></li>
                    <li><a href="{{ url('/view') }}">Articles</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                   <!-- <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-facebook"></i></li>
                    <li><i class="fa fa-youtube-play"></i></li>-->
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
     <!--footer -->
 <!-- <footer>
    <div class="wrapper">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>  
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon5.jpg" alt=""></a></li> 
      </ul>
      <div class="links">Copyright &copy; All Rights Reservd</div>
    </div>
  </footer> -->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../js/jquery-migrate-3.0.0.js" type="text/javascript"></script>
    <script src="../js/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="../js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
