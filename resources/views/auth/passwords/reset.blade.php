@extends('layouts.app')

@section('title', 'パスワード再設定')

@section('content')
  <div class="container" style="padding-top:20%;">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <!-- <h1 class="text-center"><a class="text-dark" href="/">Ghost of Tsushima</a></h1> -->
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">Set up New Password</h2>

            @include('error_card_list')

            <div class="card-text">
              <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="md-form">
                  <label for="password">New Password</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="md-form">
                  <label for="password_confirmation">Confirm New Password</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button class="btn btn-secondary blue-gradient mt-2 mb-2" type="submit">Done</button>
                <button type="button" class="btn btn-secondary blue-gradient mt-2 ml-2 mb-2" style="" onclick="location.href='/login'">Back</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
