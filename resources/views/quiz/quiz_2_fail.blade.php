@extends('layouts.quiz')
@include('navbar.head')
@include('footer')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge_0.jpg" style="width:100%; height:auto;" alt="fail_quiz">
</div>
<div class="text-right">
  <div class="">
    <button type="button" class="btn btn-danger m-4" onclick="location.href='quiz_select'">Try Again</button>

    <button type="button" class="btn btn-danger m-4" onclick="location.href='https://www.gort-tsushima.com'">Back to the Top page</button>
  </div>
</div>
@endsection
