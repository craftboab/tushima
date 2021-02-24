@extends('layouts.quiz')
@include('footer')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge_0.jpg" style="width:100%; height:auto;" alt="battle loose">
</div>
<div class="text-center my-3">
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='quiz_select_jp'">再挑戦</button>
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Topへ戻る</button>
</div>
@endsection
