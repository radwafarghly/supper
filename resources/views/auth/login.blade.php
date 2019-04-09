@extends('layouts.auth')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email-address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <div class="login100-more" style="background-image: url('images/loginphoto.jpg');">
				</div>
				<form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
                @csrf

					<span class="login100-form-title p-b-43">
                       {{ __('auth.login') }}
                    </span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100"></span>
                        <span class="label-input100">{{ __('auth.email-address') }}</span>
                    </div>
                        @if ($errors->has('email'))
                            <strong class="worng">{{ $errors->first('email') }}</strong>
                        @endif
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
                        <span class="label-input100">{{ __('auth.password') }}</span>

                    </div>
                       @if ($errors->has('password'))
                        <strong class="worng">{{ $errors->first('password') }}</strong>
                       @endif

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
                            {{ __('auth.rememberme') }}
							</label>
						</div>
						<div>
							<a href="{{ route('password.request') }}" class="txt1">
                            {{ __('auth.forgot-password') }}
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signin">
                        {{ __('auth.login') }}
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt1">
                        <a href="{{ route('register') }}">{{ __('auth.create-account') }}</a>
						</span>
					</div>
				</form>
			</div>
		</div>
</div>

@endsection
