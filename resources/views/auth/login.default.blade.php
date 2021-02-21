@extends('layouts.app')
@include('footer')

@section('content')
<!-- <script type="text/javascript">
	//画面を読み込んだ際の初期表示
	window.onload = function() {
		//画面の表示処理の関数を呼出
		display();
	}
	//①言語フラグの初期値設定　　0：日本語、1：英語
	let language_flg = 1;

	//②画面内表示処理
	function display() {
		//日本語・英語説明文
		if(language_flg == 0) {
			//日本語説明文
            document.getElementById("language_display").value = "Change English";
            document.getElementById("title").innerHTML = "ログイン";
            document.getElementById("email_text").innerHTML = "Eメール";
            document.getElementById("password_text").innerHTML = "パスワード";
            document.getElementById("login_button").innerHTML = "ログイン";
            document.getElementById("register_button").innerHTML = "登録がまだの方はこちら";

		} else {
			//英語語説明文
      document.getElementById("language_display").value = "日本語";
      document.getElementById("title").innerHTML = "Login";
      document.getElementById("email_text").innerHTML = "Email";
      document.getElementById("password_text").innerHTML = "Password";
      document.getElementById("login_button").innerHTML = "Login";
      document.getElementById("register_button").innerHTML = "Register here";
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
    <a class="navbar-brand" style="width:20%; height:auto;" href="{{ url('/')}}">
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
</nav> -->

<!-- <div class="container-fruid">
    <div class="text-right">
        <input type="button" class="btn btn-primary mt-5" id="language_display" value="button" onclick="language_change()">
        <div ></div>
    </div>
</div> -->

<div class="container" style="height:100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5" style="padding-top:300px;">
            <div class="card">
                <!-- <div id="title" class="card-header">{{ __('Login') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" id="email_text" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" id="password_text" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="login_button" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-5">
                      <div class="text-right">
                        <button type="button" class="btn btn-primary" id="register_button" onclick="location.href='{{ route('register') }}'">Register here</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
