@extends('layouts.quiz')



@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


<div class="text-image relative"  style="width:100%; height:auto;">
  <img class="relative" src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto; margin-top: -7% !important;" alt="success">
  <div class="absolute">
    @if($user->count === 1 )
    <div class="text-center">
      <h2 class="mt-2">Now unlocked Quiz2</h2>
      <button type="button" class="btn btn-primary" style="width:100%;" onclick="location.href='/quiz_select'">Try Quiz2</button>
      <button type="button" class="btn btn-danger" style="width:100%;" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
    </div>
    @else
    <div class="text-center">
      <button type="button" class="btn btn-danger" style="width:100%;" onclick="location.href='/quiz_select'">Quiz Select</button>
      <button type="button" class="btn btn-danger" style="width:100%;" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
    </div>
    @endif
  </div>
</div>

@endsection
