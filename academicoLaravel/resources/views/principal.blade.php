<!DOCTYPE html>
<html>
<title>@yield('titulo')</title>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/w3.css">
  <link rel="stylesheet" href="/css/w3-theme-black.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-opennav w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/estados" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Estados</a>
  <a href="/cidades" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Cidades</a>
  <a href="/disciplinas" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Disciplinas</a>
  <a href="/turmas" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Turmas</a>
  <a href="/alunos" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Alunos</a>

  <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
          &nbsp;
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="{{ url('/login') }}">Login</a></li>
              <li><a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
  </div>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="/images/banner.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
  </div>
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
  <center>
    @yield('conteudo')
  </center>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
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
