@extends('layouts.quiz')
@include('navbar.head')
@include('footer')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if ($user->count2 === 1)
<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="success">
</div>
<div class="text-center">
  <button type="button" class="btn btn-danger m-4" onclick="location.href='/'">Congratulation</button>
</div>
@else
<div class="text-image">
  <img src="video/quiz/BATTLE_Gauge-05.jpg" style="width:100%; height:auto;" alt="success">
  <!-- <h4>Thank you for playing</h4> -->
</div>
<div class="text-right">
  <button type="button" class="btn btn-danger m-4" onclick="location.href='/'">Back to the Top page</button>
</div>
@endif
@endsection
