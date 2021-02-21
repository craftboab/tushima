@section('navbar.head')

<nav class="">
  <div class="container-fluid navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <a class="navbar-brand" style="width:20%; height:auto;" href="{{ url('/')}}">
      <img src="/video/img_s/Logo_kari.png" alt="" width="80%" height="10%" class="d-inline-block align-top">
    </a>
    <div class="d-flex">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
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
  </div>
</nav>

@endsection
