@extends('layouts.quiz')

@include('footer')

@section('content')
<div class="container navbar navbar-expand-lg navbar-dark" style="background-color: black;">

    <div class="collapse navbar-collapse justify-content-end ml-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto m-2 mb-lg-0">
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
</div

<div class="container">
  <div class="row justify-content-center">
    <div class="p-3 p-sm-5 text-center justify-content-center">
        <div class="container" style="margin-top:10%;">
          <div class="display-4 text-center">
            <img src="video/quiz/BATTLE_TITLE_03.png" style="width:70% !important; height:auto !important;" class="mr-3" alt="">
          </div>
          <div class="justify-content-center">
              <a href="{{ url('/quiz_1') }}" class="mr-4">
                <img src="video/quiz/BATTLE_TITLE_01.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
              </a>
              @if($user->count === 0)
                <a href="#" class="ml-4">
                  <img src="video/quiz/BATTLE_TITLE_02_2.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
                </a>
              @else
                <a href="{{ url('/quiz_2') }}" class="ml-4">
                  <img src="video/quiz/BATTLE_TITLE_02.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
                </a>
              @endif
          </div>
          <div class="py-5">
            <button type="button" class="btn text-white" style="background-color:rgb(98, 8, 8); margin-top:5%;" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
