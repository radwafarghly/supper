@extends('layouts.auth')

@section('content')
{{--<div class="container">
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
</div>--}}





<div class="limiter">
		<div class="container-login100">
			<div class="row wrap-login100">
            <div class="col-md-4 login100-more" style="background-image: url('images/loginphoto.jpg');">
                </div>
                <div class="col-md-8">
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
                            <input id="user-name" type="text" class=" input100 {{ $errors->has('user-name') ? ' is-invalid' : '' }}" name="user-name" value="{{ old('user-name') }}" required autofocus>
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
                   <div class="wrap-input100 validate-input">
                            <input id="address" type="text" class=" input100 {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required >
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.address') }}</span>

                                @if ($errors->has('address'))
                                    <strong>{{ $errors->first('address') }}</strong>
                                @endif
                    </div>
                     <div class="wrap-input100 validate-input">
                            <input id="education" type="text" class=" input100 {{ $errors->has('education') ? ' is-invalid' : '' }}" name="education" value="{{ old('education') }}" required >
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.education') }}</span>

                                @if ($errors->has('education'))
                                    <strong>{{ $errors->first('education') }}</strong>
                            @endif
                    </div>

                    <div class="wrap-input100 validate-input">
                            <select id="birth_year" type="text" class="input100 selection-2 " name="birth_year" value="{{ old('birth_year') }}" required >
                              <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                            </select>
                            <span class="focus-input100"></span>
                           <span class="label-input100">{{ __('auth.birth_year') }}</span>
                    </div>
                     <div class="wrap-input100 validate-input">
                            <select id="disability-type" type="text" class="input100 selection-2 " name="disability-type" value="{{ old('disability-type') }}" required >
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                            </select>
                            <span class="focus-input100"></span>
                           <span class="label-input100">{{ __('auth.disability-type') }}</span>
                    </div>
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
</div>
<div id="dropDownSelect2"></div>



@endsection
@section('script')
  <script>
    $(".selection-2").select2({
    // minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect2')
        });
    </script>
@endsection
