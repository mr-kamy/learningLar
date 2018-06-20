<nav class="navbar navbar-light bg-light navbar-expand-lg">
    <div class="navbar-header">
        <div class="navbar-brand">Learning Laravel</div>
    </div>
    <div class="collapse navbar-collapse w-100 order-3">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Memeber</a>


                <ul class="dropdown-menu" role="menu">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout </a></li>
                        </li>
                    @endif
                </ul>

            </li>
        </ul>

    </div>

</nav>

