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
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="success">
</div>


@if($user->count === 1 )
  <div class="text-center">
    <h2 class="mt-5">Quiz2が解放されました</h2>
    <!-- <img src="video/img_l/Ghost-of-Tsushima_20200718201741-e1595133731951.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像"> -->
  </div>
  <div class="">
    <div class="text-right">
      <button type="button" class="btn btn-primary m-4" style="width:30%;" onclick="location.href='/quiz_select_jp'">Quiz2</button>
      <button type="button" class="btn btn-danger mr-4" onclick="location.href='https://www.gort-tsushima.com'">Topへ戻る</button>
    </div>
  </div>
@else
<div class="py-5 text-right">
  <button type="button" class="btn btn-danger mr-4" onclick="location.href='/quiz_select_jp'">Quiz Select</button>
  <button type="button" class="btn btn-danger mr-4" onclick="location.href='https://www.gort-tsushima.com'">Topへ戻る</button>
</div>
@endif

@endsection
