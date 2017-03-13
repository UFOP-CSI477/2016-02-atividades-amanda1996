<!DOCTYPE html>
<html>
<title>@yield('titulo')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/fonts/css.css">
<link rel="stylesheet" href="/fonts/w3.css">
<link rel="stylesheet" href="/fonts/css1.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-opennav w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="{{ url('/produtos') }}" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{ url('/users/home_cliente/1') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Área do Cliente</a>
    <a href="{{ url('/users/home_admin') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Área do Administrador</a>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
          <li><a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a></li>
          <li><a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Criar conta</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endif
    </ul>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="{{ url('/produtos') }}" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="{{ url ('/users/home_cliente/1')}}" class="w3-bar-item w3-button w3-padding-large">Área do Cliente</a>
    <a href="{{ url ('/users/home_admin')}}" class="w3-bar-item w3-button w3-padding-large">Área do Administrador</a>
  </div>
</div>

<!-- Header -->
<header>
<img src="/images/header.jpg" style="width:100%;heigth:60%">
</header>

<!-- First Grid -->
<center>
    <div class="w3-row-padding w3-padding-64 w3-container">
      @yield('conteudo')
    </div>
</center>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
