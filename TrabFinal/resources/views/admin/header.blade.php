<header class="main-header" style="background-color: #a1c8b8 !important;">

<!-- Logo -->
<a href="/" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->

  <span class="logo input-gestante"><b>Gestando</b></span>

</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top ">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle input-gestante" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->apelido }} <span class="caret"></span>
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
</nav>


</header>
