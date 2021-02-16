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

<body>
  <div class="box">
    <script src="{{ asset('js/map.js') }}" defer></script>

    <nav class="">
      <div class="container-fluid navbar navbar-expand-lg p-4 navbar-dark mr-5" style="background-color: black;">
        <a class="navbar-brand" href="{{ url('/')}}">
          <img src="/video/img_s/Logo_kari.png" alt="" width="50%" height="20%" class="d-inline-block align-top">
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
                  <a class="nav-link nav_text" href="{{ url('/special') }}">Special Contents</a>
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


  <div id="movie-contents">
    <video id="video" src="video/clip/top_sample.mp4" poster="video/clip/top_sample.png" controls></video>
    <div class="">
      @guest
      <a href="{{ route('login') }}">
        <img src="/video/img_s/tushima_logo.png" class="mb-5 pb-5" alt="">
      </a>
      @else
      <a href="/quiz_select">
        <img src="/video/img_s/tushima_logo.png" class="mb-5 pb-5" alt="">
      </a>
      @endguest
    </div>

    <!-- <div class="movie_btn">
      @guest
        <a class="navbar-brand btn btn-secondary" href="{{ route('login') }}">Quiz</a>
      @else
        <a class="navbar-brand btn btn-secondary" href="/quiz_select">Quiz</a>
      @endguest
    </div> -->
  </div>

  <div class="p-3 p-sm-5 text-center" style="width:100%; height:auto; margin-top:5%;">
      <div class="container">
        <div class="d-flex align-items-center justify-content-center">
          <div class="img-flex-2">
          	<video id="video" src="video/clip/Top_m_kari.mp4" poster="video/img_l/top_img.png" class="mx-3" width="45%" height="25%" controls type="video/mp4"></video>
          	<video id="video" src="video/clip/Top_m_kari.mp4" poster="video/img_l/top_img.png" class="mx-3" width="45%" height="25%" controls type="video/mp4"></video>
          </div>
        </div>
      </div>
  </div>

  <div class="text-center" style="width:100%; height:auto; margin-top:10%;">
      <div class="container text-white">
        <div class="text-center">
          <img src="video/img_s/about_tushima.png" style="width:60%;" alt="">
        </div>
        <h5 style="padding-left:10%; padding-right:10%;">GHOST OF TSUSHIMA unfolds in Tsushima, in the Genkai Sea in northern Kyushu, Japan.
The island is part of Nagasaki Prefecture and boasts abundant nature with 89% of the terrain covered in mountains and forests.
With most of East Asia just a stone’s throw away,
it has also set the stage numerous historical events, including the Mongol invasions of Japan.</h5>
      </div>
  </div>


  <div class="text-center justify-content-center" style="margin-top:2%;">
      <div class="container">
        <div class="wrapp">
          <!-- <div class=""> -->
            <img src="/video/img_l/spot_detail3_after_pc.png" style="width:80% !important; height:0% !important;" class="mr-3 my-3" alt="">
            <img src="/video/img_l/spot_detail2_after_pc.png" style="width:80% !important; height:0% !important;" class="mr-3 my-3" alt="">
          <!-- </div> -->
        </div>
      </div>
  </div>


  <div class="p-3 p-sm-5 text-center" style="width:100%; height:auto;">
      <div class="container">
        <div class="img-flex-3">
          <a href="https://www.tsushima-net.org">
            <img src="/video/banner/banner1.png" width="250" height="80" class="mr-3 my-3" alt="">
          </a>
          <a href="https://www.nagasaki-tabinet.com">
            <img src="/video/banner/banner2.png" width="250" height="80" class="mx-3 my-3" alt="">
          </a>
          <a href="https://www.playstation.com/en-us/games/ghost-of-tsushima/">
            <img src="/video/banner/banner3.png" width="250" height="80" class="ml-3 my-3" alt="">
          </a>
        </div>
      </div>
  </div>


  <footer class="bg-dark text-white">
    <div class="container">
      <div class="text-center">
        <p>
          Copyright © tushima
        </p>
      </div>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </div>
</body>
</html>
