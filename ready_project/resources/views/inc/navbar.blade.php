    <div class="row HEAD">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 back1_1">
            <div class="back1">
                <a class="navbar-brand" href="{{ url('/') }}">WFC</a>
                <button class="nav-btn navbar-toggle" type="button" id="btn_toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span>&nbsp;&nbsp;</span><i class="fa fa-align-justify icon"></i>
                </button>

            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9 back1_2">
            {{--<div class="back2">--}}
                {{--<form class="form-inline" action="action_page.php">--}}
                    {{--<input class="form-control search-input" type="text" placeholder="Search">--}}
                    {{--<button class="btn btn-success" type="submit">Search</button>--}}
                {{--</form>--}}

            {{--</div>--}}
        </div>
    </div>
    <div class="row" id="dropdown_menu" style="display: none;">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-xl-12 bg-dark">
            <div class="menus navbar-expand-lg">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1"></div>
                    <div class="col-md-6 col-lg-8 col-sm-12 col-xs-12">
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="nav navbar-nav">

                                <li class="nav-item">
                                    <div class="dropdown eu">

                                        <button type="button" class="btn eu btn-dark dropdown-toggle button" data-toggle="dropdown">
                                            <a href="{{ url('/') }}" class="eu"><span class="menu">Europe</span></a>
                                        </button>


                                        <div class="dropdown-menu eu-h">
                                            <a class="dropdown-item" href="{{ url('/post/display/1') }}">Spain</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/2') }}">Italy</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/3') }}">Germany</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/4') }}">France</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/5') }}">Russia</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/6') }}">England</a>
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item">
                                    <div class="dropdown as">
                                        <button type="button" class="btn btn-dark dropdown-toggle button" data-toggle="dropdown">
                                            <a href="{{ url('/') }}"><span class="menu">Asia</span></a>
                                        </button>
                                        <div class="dropdown-menu as-h">
                                            <a class="dropdown-item" href="{{ url('/post/display/7') }}">Japan</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/8') }}">Korea</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/9') }}">Uzbekistan and CIS</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown am">
                                        <button type="button" class="btn btn-dark dropdown-toggle button" data-toggle="dropdown">
                                            <a href="#"><span class="menu">America</span></a>
                                        </button>
                                        <div class="dropdown-menu am-h">
                                            <a class="dropdown-item" href="{{ url('/post/display/10') }}">Brazil</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/11') }}">Chile</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/12') }}">Columbia</a>
                                            <a class="dropdown-item" href="{{ url('/post/display/13') }}">USA</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item">

                                    <a href="{{ url('/post/display/14') }}">
                                        <button type="button" class="btn btn-primary">
                                            World Cup - 2018
                                        </button>
                                    </a>
                                </li>
                                <li class="nav-item">

                                    <a href="{{ url('/post/display/15') }}">
                                        <button type="button" class="btn btn-primary">
                                            UEFA
                                        </button>
                                    </a>
                                </li>


                            </ul>
                            @if (Auth::guest())
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item">
                                    <a href="{{ route('login') }}">
                                        <button type="button" class="btn btn-success">
                                            Login
                                        </button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">
                                        <button type="button" class="btn btn-success">
                                            Register
                                        </button>
                                    </a>
                                </li>
                            </ul>
                                @else
                                <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <div class="dropdown am">
                                        <button type="button" class="btn btn-dark dropdown-toggle button" data-toggle="dropdown">
                                            <a href="/home"><span class="menu">{{ Auth::user()->name }}</span></a>
                                        </button>
                                        <div class="dropdown-menu am-h">
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                            <a class="dropdown-item" href="/home">Dashboard</a>
                                                @if(Auth::user()->role_id == 1)
                                                <a class="dropdown-item" href="/admin">Users</a>
                                                @endif
                                            @endif
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Logout
                                                </a>
                                        </div>
                                    </div>
                                </li>


                                    <li class="dropdown">
                                    <ul class="dropdown-menu" role="menu">
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
                                </ul>


                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1"></div>
                </div>
            </div>
        </div>
    </div>


