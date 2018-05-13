

<div class="container-fluid">

    <div class="row">

        <div class="loginpage">
            <div class="form">
                <form class="register-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input placeholder="Name"  id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif

                    <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                    <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                    <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                    <input placeholder="Password confirm" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>

                    <p class="message"> Already Registered? <a href="#"> Login</a>
                    </p>

                </form>
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    <input id="email" type="email" placeholder="email" class="form-control" name="email"
                           value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <p class="message">Not Registered?<a href="#">Register</a></p>
                    <p class="message"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

    <script>
        jQuery('.message a').click(function () {
            jQuery('form').animate({height: "toggle", opacity: "toggle"}, "slow")
        });
    </script>
