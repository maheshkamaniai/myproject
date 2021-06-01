@extends('layouts.app')

@section('content')

<link rel="icon" href="favicon.ico" type="image/x-icon" />

<title>Awesome Infosys</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/theme1.css" />


<body class="font-montserrat">

    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-2">
                    <a class="header-brand" href="#"><img src="{{ asset('assets/favicon.png') }}" style='width:50px'></img></a>
                </div>
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-footer">
                            <!-- <a href="index-2.html" class="btn btn-primary btn-block" title="">Sign in</a> -->
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>

                            
                        </div>
                    </div>
                    </form>
                    <div class="text-center text-muted">
                        Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
                    </div>
            </div>
        </div>
        <div class="auth_right full_img"></div>
    </div>

    <script src="assets/bundles/lib.vendor.bundle.js"></script>
    <script src="assets/js/core.js"></script>

    @endsection