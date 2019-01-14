<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/dashboard">SKRIPSI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DROPDOWN-Menu</a>
            <div class="dropdown-menu">
                <a href="/hourmap" class="dropdown-item">Past-Hours Map</a>
                <a href="/daymap" class="dropdown-item">Past-Days Map</a>
                <a href="/weekmap" class="dropdown-item">Past-Week Map</a>
                <a href="/monthmap" class="dropdown-item">Past-Month Map</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kml7days">KML-Map</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        </ul>
        <span class="navbar-text">
           Discover our website, 
            <div class="btn-group">
                <div class="btn-group dropleft" role="group">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropleft</span>
                    </button>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                        <a class="dropdown-item dropdown-link" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-link" href="#">Add Your Link Here</a>
                        <a class="dropdown-item dropdown-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary">
                    @guest
                        <a class="nav-menu-right" href="{{ route('login') }}">Login</a>
                        <a class="nav-menu-right" href="{{ route('register') }}">Register</a>        
                    @else
                    <!-- Tampilkan nama user yg login -->
                        <a class="username">
                            {{ Auth::user()->name }}
                        </a>
                    @endguest
                </button>
            </div>
        </span>
    </div>
</nav>