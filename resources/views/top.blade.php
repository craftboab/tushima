<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="{{ asset('css/top.css') }}">

  <title>Ghost of Tushima</title>

</head>

<body class="bg-dark">
  <script src="{{ asset('js/map.js') }}" defer></script>

  <nav class="">
    <div class="container-fluid navbar navbar-expand-lg p-4 navbar-dark mr-5" style="background-color: black;">
      <a class="navbar-brand" href="{{ url('/')}}">
        <img src="/video/Links/Logo_kari.png" alt="" width="300" height="40" class="d-inline-block align-top">
      </a>
      <div class="content-right">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto m-2 mb-lg-0">
            @guest
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ route('login') }}">Tushima Map</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ route('login') }}">Special Contents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ route('login') }}">Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ route('login') }}">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link nav_text" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
            @else
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ url('/map') }}">Tushima Map</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ url('/') }}">Special Contents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ url('/quiz_select') }}">Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_text" href="{{ url('/') }}">About us</a>
              </li>
              <li class="nav-item">
                <p class="nav-link nav_text">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </p>
              </li>

              <li class="nav-item">
                <div>
                <a class="nav-link nav_text" href="{{ route('logout') }}"
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

<!-- <nav class="navbar navbar-expand-lg p-4 navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">
      <img src="/video/Links/Logo_kari.png" alt="" width="300" height="40" class="d-inline-block align-top">
    </a>
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
              <a class="nav-link" href="{{ url('/map') }}">Tushima Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Special Contents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Special Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/quiz_select') }}">Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">About us</a>
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
</nav> -->

<section>
  <div class="relative">
    <video class="container-fluid" controls>
      <source src="video/Top_m_kari.mp4" type="video/mp4">
    </video>
  <!-- <div class="bg_ghost">
    <img src="/video/Links/Logo_kari.png" alt="" width="40%" height="20%" class="d-inline-block align-top">
  </div> -->
  <div class="bg-whites">
    @guest
    <a class="navbar-brand" href="{{ route('login') }}">
      <img src="/video/Links/story_btn.png" alt="" width="60%" height="20%" class="d-inline-block align-top">
    </a>
    <!-- <button type="button" class="btn btn-secondary" onclick="location.href='/register'">Register for Quiz</button> -->
    @else
    <a class="navbar-brand" href="/quiz_select">
      <img src="/video/Links/story_btn.png" alt="" width="60%" height="20%" class="d-inline-block align-top">
    </a>
    @endguest
  </div>
  </div>
</section>
<div class="p-3 p-sm-5 text-center top-1">
  <div class="container">
    <h1 class="display-2 mt-5 pt-5 text-white" style="font-family: sans-serif; opacity:0.6;">Ghost of Tushima</h1>
    <p class="text-white">HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1</p>

  </div>
</div>


<footer class="bg-light">
  <div class="container">
    <div class="text-center">
      <p>
        Copyright © tushima
      </p>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
