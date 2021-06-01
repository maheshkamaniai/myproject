@extends('layouts.app')

@section('content')
<body class="font-montserrat">
    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-5">
                    <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-title">Create new account</div>
                        <div class="form-group">
                            <label class="form-label">Name</label>

                            <input id="name" type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
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

                        <div class="form-group">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="form-label">{{ __('Profile') }}</label>
                            <input type="file" name="profile" class="form-control">
                        </div>

                        <div class="form-group">
                            <?php $val_Roal=""; ?>
                            <label for="password-confirm" class="form-label">Role </label>
                            <select class="form-control show-tick" name="roal">
                                <option value="">-- Roal --</option>
                                <option value="0" @if($val_Roal==1) selected @endif>Admin</option>
                                <option value="1" @if($val_Roal==0) selected @endif>Developer</option>
                            </select>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                </div>
                </form>
                <div class="text-center text-muted">
                    Already have account? <a href="{{ route('login')}}">Sign in</a>
                </div>
            </div>
        </div>
        
    </div>
@endsection