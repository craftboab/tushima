@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
        <div class="display-4 text-center">complete!!! {{ Auth::user()->name }}</div>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          @if ($user->count2 === 1)
          <div class="text-center">
            <h4>Congratulation {{$user->name}} You got reward!</h4>
            <img src="video/img_l/quiz_fail.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像">
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary m-4" onclick="location.href='/">Back to the Top page</button>
          </div>
          @else
          <div class="text-center">
            <h4>Thank you for playing</h4>
            <img src="video/img_l/quiz_fail.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像">
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary m-4"  onclick="location.href='/'">Back to Top page</button>
          </div>
          @endif
        </div>
    </div>
</div>
@endsection
