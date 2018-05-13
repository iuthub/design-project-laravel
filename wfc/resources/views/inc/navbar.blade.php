{{--<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">--}}
{{--<a class="navbar-brand" href="#">Navbar</a>--}}
{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}

{{--<div class="collapse navbar-collapse" id="navbarsExampleDefault">--}}
{{--<ul class="navbar-nav mr-auto">--}}
{{--<li class="nav-item active">--}}
{{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#">Link</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link disabled" href="#">Disabled</a>--}}
{{--</li>--}}
{{--<li class="nav-item dropdown">--}}
{{--<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
{{--<div class="dropdown-menu" aria-labelledby="dropdown01">--}}
{{--<a class="dropdown-item" href="#">Action</a>--}}
{{--<a class="dropdown-item" href="#">Another action</a>--}}
{{--<a class="dropdown-item" href="#">Something else here</a>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}
{{--<form class="form-inline my-2 my-lg-0">--}}
{{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
{{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--</form>--}}
{{--</div>--}}
{{--</nav>--}}

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="{{ url('/') }}">Main</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/post') }}">Post</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                <li><a href="/home">Dashboard</a></li>
                                @if(Auth::user()->role_id == 1)
                                    <li><a href="/admin">Users</a></li>
                                @endif
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>


                @endif
            </ul>
        </div>
    </div>
</nav>