@extends('layouts.app')
@include('footer')

@section('content')
<script src="{{ asset('js/quiz.js') }}" defer></script>

<!-- <script src="{{ asset('js/quiz_popup.js') }}" defer></script> -->
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
      <div class="text-center">
        <h1 id="timer"></h1>
      </div>
  </div>
</nav>

<!-- modal bigining -->
<div class="popup" id="start_quiz">
  <div class="popup-inner">
    <!-- <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div> -->
    <h1>Are you ready?</h1>
    <img src="images/boab.jpg" alt="ポップアップ画像">
    <p class="mt-5">制限時間１０秒以内に問題を解く</p>
    <a id="start_quiz" class="btn btn-primary" href="#" style="color:white;" role="alert">start_quiz</a>
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>

<!--  modal finish -->
<div class="popup" id="js-popup">
  <div class="popup-inner">
    <h1>Time Over</h1>
    <img src="images/tushima_timeover.jpg" alt="ポップアップ画像">
    <div id="result" class="alert alert-primary mt-5" role="alert"></div>
    <div class="text-center">
      <a id="congrat" class="btn btn-primary" href="" style="color:white;" role="alert"></a>
    </div>
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>


<!--  modal timeup -->
<div class="popup" id="js-popup1">
  <div class="popup-inner">
    <!-- <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div> -->
    <h1>Time Over</h1>
    <img src="images/tushima_timeover.jpg" alt="ポップアップ画像">
    <div id="result_timeover" class="alert alert-primary mt-5" role="alert"></div>
    <div class="text-center">
      <a id="congrat_timeover" class="btn btn-primary" href="" style="color:white;" role="alert"></a>
      <!-- <button class="btn btn-secondary mt-5" href="" id="congratulation" ></button> -->
    </div>
    <!-- <button class="btn btn-secondary mt-5" id="no_prize"></button> -->
    <!-- <a href="/">back</a> -->
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>

<div class="">

  <div class="jumbotron" style="height: 600px">
    <div class="d-flex justify-content-center">
      <div id="js-question" class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div>
      <div class="container">
        <div>
          <img src="" class="d-block mx-auto" id='quiz_image' style="width: 18rem;" alt="">
        </div>
      </div>
      <!-- <button class="btn btn-secondary mt-5" href="" id="congratulation" ></button> -->
    </div>
    <div id="js-items" class="d-flex justify-content-center">
      <div class="row">
        <div class="m-2">
          <button type="button" id="" class="btn btn-primary boab">Primary</button>
        </div>
        <div class="m-2">
          <button type="button" id="" class="btn btn-primary boab">Primary</button>
        </div>
        <div class="m-2">
          <button type="button" id="" class="btn btn-primary boab">Primary</button>
        </div>
        <div class="m-2">
          <button type="button" id="" class="btn btn-primary boab">Primary</button>
        </div>
      </div>
    </div>
  </div>


</div>

</body>

</html>

@endsection
