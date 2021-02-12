@section('navbar.head')

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

@endsection
