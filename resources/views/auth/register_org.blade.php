@extends('layouts.app')
@include('footer')

@section('content')
<script type="text/javascript">
	//画面を読み込んだ際の初期表示
	window.onload = function() {
		//画面の表示処理の関数を呼出
		display();
	}
	//①言語フラグの初期値設定　　0：日本語、1：英語
	let language_flg = 0;

	//②画面内表示処理
	function display() {
		//日本語・英語説明文
		if(language_flg == 0) {
			//日本語説明文
      document.getElementById("language_display").value = "日本語";
      document.getElementById("title").innerHTML = "Register";
      document.getElementById("user_name").innerHTML = "Name";
      document.getElementById("user_email").innerHTML = "Email";
      document.getElementById("user_password").innerHTML = "Password";
      document.getElementById("user_password_confirm").innerHTML = "Confirm Password";
      document.getElementById("user_address").innerHTML = "Address";
      document.getElementById("register").innerHTML = "Register";

		} else {
			//英語語説明文
      document.getElementById("language_display").value = "Change English";
      document.getElementById("title").innerHTML = "新規登録";
      document.getElementById("user_name").innerHTML = "名前";
      document.getElementById("user_email").innerHTML = "Eメール";
      document.getElementById("user_password").innerHTML = "パスワード";
      document.getElementById("user_password_confirm").innerHTML = "パスワード確認";
      document.getElementById("user_address").innerHTML = "住所";
      document.getElementById("register").innerHTML = "登録";
		}
	}

	//③言語切替ボタン押下時の処理
	function language_change() {
		//言語フラグ
		if(language_flg == 0) {
			//日本語→英語
			language_flg = 1;
		} else {
			//英語→日本語
			language_flg = 0;
		}
		//display関数の呼び出し（表示部分を処理するため）
		display();
	}
</script>
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: black;">
    <a class="navbar-brand" style="width:20%; height:auto;" href="{{ url('/quiz_select')}}">
      <img src="/video/img_s/Logo_kari.png" alt="" width="80%" height="10%" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
        <ul class="navbar-nav ml-auto">
          @guest
            <li class="nav-item mx-1">
              <a class="nav-link nav_text" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item mx-1">
                <a class="nav-link nav_text" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" style="background-color:black !important;" aria-labelledby="navbarDropdown">
                <li>
                  <p class="dropdown-item nav-link text-white">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </p>
                </li>
                <li>
                  <div>
                  <a class="dropdown-item nav-link text-white" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
                </li>
              </ul>
            </li>

          @endguest
        </ul>
    </div>
</nav>

<div class="container">
    <div class="text-right">
        <input type="button" class="btn btn-primary mt-5" id="language_display" value="button" onclick="language_change()">
        <div ></div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="title" class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label id="user_name" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="user_email" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="user_password" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="user_password_confirm" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="user_address" for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label id="user_country" for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country">

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="register" type="submit" class="btn btn-primary">
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
@endsection
