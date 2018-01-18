<div id="main-header" class="ui stackable fixed menu">
    <div id="navTitle" class="middle aligned content" href="/dashboard">
        <p class="ui header">Dashboard</p>
    </div>
    <a class="item" href="/dashboard">
        <i class="home icon"></i> Home
    </a>

    <a class="item" href="/workflows">
        <i class="tasks icon"></i>
        Workflows
    </a>

    <a class="item" href="/statistic">
        <i class="dashboard icon"></i> Statistic
    </a>

    <a class="item" href="/calendar">
        <i class="calendar icon"></i> Calendar
    </a>

    <a class="item" href="/admin">
        <i class="users icon"></i> Admin
    </a>
    <div class="right menu">
        <a class="item">
            @guest
                <h4 class="ui header">Hello Guests</h4>
                <!--`
                <div class="item">
                    <span class="navbar-top-greet">Hello Guest</span>
                </div>
                -->
            @else
                <h4 clas="ui header">Welcome,</h4>
                <!-- 
                <div class="item">
                    <span class="navbar-top-greet">Welcome, </span>
                </div>
                -->
            @endguest
        </a>
        <a class="item">
                @guest
                <a class="ui item" href="{{ route('login') }}">Login</a>
                <a class="ui item" href="{{ route('register') }}">Register</a>        
                @else
                <!-- Tampilkan nama user yg login -->
                    <h3 class="ui header">
                        {{ Auth::user()->name }}
                    </h3>
                @endguest 
        </a>
         
        <div class="item">                                
                <a class="ui item" href="{{ route('logout') }}"
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