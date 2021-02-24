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
</div>


@if($user->count === 1 )
  <div class="text-center my-4">
    <h2 class="mt-3 text-white">Quiz2が解放されました</h2>
    <!-- <img src="video/img_l/Ghost-of-Tsushima_20200718201741-e1595133731951.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像"> -->
  </div>
  <div class="text-center my-3">
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='/quiz_select_jp'">Quiz2</button>
    <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);" onclick="location.href='https://www.gort-tsushima.com'">Topへ戻る</button>
  </div>
@else
<div class="text-center my-3">
  <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);"  onclick="location.href='/quiz_select_jp'">Quiz Select</button>
  <button type="button" class="btn text-white m-2" style="background:rgb(98, 8, 8);"  onclick="location.href='https://www.gort-tsushima.com'">Topへ戻る</button>
</div>
@endif

@endsection
