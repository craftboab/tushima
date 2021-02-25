@extends('layouts.app')
@include('footer')

@section('content')


  <div class="container-fluid navbar navbar-expand-lg navbar-dark" style="background-color: black;">

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
  </div>



<div class="container">
  <div class="justify-content-center" style="height:100vh;">
    <div class="" style="text-align:center;">
      <div class="display-5 text-white mb-5" style="padding-top:30%;">
        language
      </div>
        <button type="button" class="btn mx-2 text-white" style="width:30%; background-color:rgb(98, 8, 8)" onclick="location.href='/quiz_select'">English</button>
        <button type="button" class="btn mx-2 text-white" style="width:30%; background-color:rgb(98, 8, 8)" onclick="location.href='/quiz_select_jp'">Japanese</button>
    </div>
  </div>
</div>


@endsection
