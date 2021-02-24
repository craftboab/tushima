@extends('layouts.quiz')
@include('footer')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if ($user->count2 === 1)
<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="battle win">
</div>
<div class="text-center my-4">
  <h2 class="mt-5 text-white">Congratlation!!!</h2>
  <div class="text-center my-3">
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='/quiz_select'">Quiz Select</button>
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Back to the Top page</button>
  </div>
</div>
@else
<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="battle win">
  <!-- <h4>Thank you for playing</h4> -->
</div>
<div class="text-center my-3">
  <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='/quiz_select'">Quiz Select</button>
  <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Back to the Top page</button>
</div>
@endif
@endsection
