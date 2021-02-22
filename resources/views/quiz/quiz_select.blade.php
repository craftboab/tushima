@extends('layouts.quiz')

@include('footer')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="p-3 p-sm-5 text-center justify-content-center">
        <div class="container" style="margin-top:10%;">
          <div class="display-4 text-center">
            <img src="video/quiz/BATTLE_TITLE_03.png" style="width:70% !important; height:auto !important;" class="mr-3" alt="">
          </div>
          <div class="justify-content-center">
              <a href="{{ url('/quiz_1') }}" class="mr-4">
                <img src="video/quiz/BATTLE_TITLE_01.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
              </a>
              @if($user->count === 0)
                <a href="#" class="ml-4">
                  <img src="video/quiz/BATTLE_TITLE_02_2.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
                </a>
              @else
                <a href="{{ url('/quiz_2') }}" class="ml-4">
                  <img src="video/quiz/BATTLE_TITLE_02.png" style="width:25% !important; height:auto !important;" class="my-3" alt="">
                </a>
              @endif
          </div>
          <div class="py-5">
            <button type="button" class="btn text-white" style="background-color:rgb(98, 8, 8); margin-top:5%;" onclick="location.href='https://www.gort-tsushima.com'">Back to top page</button>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
