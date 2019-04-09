@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required autofocus>

                                @if ($errors->has('slug'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <div class="login100-more col-md-6" style="background-image: url('images/loginphoto.jpg');">
				</div>
				<form class="login100-form validate-form"  method="POST" action="{{ route('register') }}">
                @csrf

					<span class="login100-form-title p-b-43">
                       {{ __('auth.create-account') }}
                    </span>



                    <div class="wrap-input100 validate-input">
                            <input id="name" type="text" class=" input100 {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.name') }}</span>

                                @if ($errors->has('name'))
                                    <strong>{{ $errors->first('name') }}</strong>
                            @endif

                    </div>
                    <div class="wrap-input100 validate-input">
                            <input id="user-name" type="text" class=" input100 {{ $errors->has('user-user-name') ? ' is-invalid' : '' }}" name="user-name" value="{{ old('user-name') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.user-name') }}</span>

                                @if ($errors->has('user-name'))
                                    <strong>{{ $errors->first('user-name') }}</strong>
                            @endif
                    </div>
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


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input type="password" class="input100" name="password_confirmation" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('auth.password_confirmation') }}</span>
                    </div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signin">
                        {{ __('auth.create-account') }}
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt1">
                        <a href="{{ route('login') }}">{{ __('auth.login') }}</a>
						</span>
					</div>
				</form>
			</div>
		</div>
</div>



@endsection
