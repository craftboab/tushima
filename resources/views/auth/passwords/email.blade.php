@extends('layouts.app')

@section('title', 'パスワード再設定')

@section('content')
  <div class="container" style="padding-top:20%;">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <!-- <h1 class="text-center"><a class="text-dark" href="{{ route('login') }}">back</a></h1> -->
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">Reset Password</h2>

            @include('error_card_list')

            @if (session('status'))
              <div class="card-text alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <div class="card-text">
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="md-form">
                  <label for="email">Email Address</label>
                  <input class="form-control" type="text" id="email" name="email" required>
                </div>

                <button class="btn btn-secondary blue-gradient mt-2 mb-2" type="submit">Send</button>
                <button type="button" class="btn btn-secondary blue-gradient mt-2 ml-2 mb-2" style="" onclick="location.href='/login'">Back</button>
                <!-- <button class="btn btn-primary" onclick="window.history.back()">Back</button> -->
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
