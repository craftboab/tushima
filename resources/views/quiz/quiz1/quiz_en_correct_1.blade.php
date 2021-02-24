@extends('layouts.quiz')

@include('footer')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="battle win">
  <div>
    @if($user->count === 1 )
    <div class="text-center my-4">
      <h2 class="mt-3 text-white">Now unlocked Quiz2</h2>
      <div class="text-center my-3">
        <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='/quiz_select'">Quiz Select</button>
        <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
      </div>
    </div>
    @else
    <div class="text-center my-3">
      <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='/quiz_select'">Quiz Select</button>
      <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
    </div>
    @endif
  </div>
</div>

@endsection
