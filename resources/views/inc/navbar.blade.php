{{--  <div class="preloader-background">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>  --}}
<!--Navbar-->
<nav class="navbar navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        
        <div class="pos-f-t">
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                </ul>
                <!-- Links -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-items">
                        <a href="#" class="nav-link"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->

 {{--  <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand text-primary" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                    <li><span class="glyphicon glyphicon-use" aria-hidden="true"></span></li> 
                    <li><span class="glyphicon glyphicon-use" aria-hidden="true"></span></li> 
                &nbsp;
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a class="text-primary" href="/projects">Projects</a></li>
                    <li><a class="text-primary" href="{{ route('login') }}">Login</a></li>
                    {{--  <li><a class="text-primary" href="{{ route('register') }}">Register</a></li>    --}}
                    
               {{-- @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
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
                @endguest
            </ul>
        </div>
    </div>
</nav>  --}}

