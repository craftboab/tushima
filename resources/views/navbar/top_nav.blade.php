@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ghost of Tushima</a>
    <div class="content-right">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @guest
            <li class="nav-item">
              <a class="nav-link nav-color" href="{{ route('login') }}">Tushima Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Special Contents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Special Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/top') }}">Tushima Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/top') }}">Special Contents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/top') }}">Special Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/top') }}">Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/top') }}">About us</a>
            </li>
            <li class="nav-item">
              <p class="nav-link">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </p>
            </li>

            <li class="nav-item">
              <div>
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </div>
</nav>

@endsection
