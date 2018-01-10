<nav class="navbar navbar-toggleable-md fixed-top navbarTop">
        
        <div class="btn btn-secondary navbar-toggler glyphicon glyphicon-menu-hamburger hidden-sm hidden-md hidden-lg toggleBtn" type="button" data-toggle="collapse" data-target="#webNavbarTop" aria-controls="webNavbarTop" aria-expanded="false" aria-label="Toggle navigation">
        </div>

        <div id="webNavbarTop" class="container-fluid collapse navbar-collapse">
            <div class="row justify-content-md-center no-gutters navbartop-text">
                    <div class="col-sm-4 col-md-4" >
                        <a id="navTitle" class="navbar-brand" href="/dashboard">Dashboard</a>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="row no-gutters">
                                <div class="col">
                                    @guest
                                   
                                        <p class="text-right text-sm-right">Hello Guest</p>
                                        
                                    @else
                                       
                                        <p class="text-right text-sm-right">Welcome, </p>
                                     
                                    @endguest
                                </div>
                                <div class="col-md-auto">
                                        @guest
                                        <div class="col-sm-8">
                                            <a class="navbartop-user" href="{{ route('login') }}">Login</a>
                                            <a class="navbartop-user" href="{{ route('register') }}">Register</a>
                                        </div>
                                        @else
                                        <!-- Tampilkan nama user yg login -->
                                        <p class="text-right text-sm-right">
                                                {{ Auth::user()->name }}
                                        </p>
        
                                       
                                        @endguest
                                </div>
                                <div class="col col-lg-2 text-right">
                                        <a class="text-right" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                </div>
                        </div>
                               
                    
                    </div>
            </div>
        </div>
    </nav>