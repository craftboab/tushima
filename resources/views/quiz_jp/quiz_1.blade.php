@extends('layouts.quiz')
@include('footer')

@section('content')
<script src="{{ asset('js/quiz_jp.js') }}" defer></script>

<!--  modal finish -->
<div class="popup" id="js-popup">
  <div class="popup-inner">
    <!-- <h1 class="text-center text-white">Finish</h1> -->
    <!-- <img src="images/tushima_timeover.jpg" alt="ポップアップ画像"> -->
    <div id="result" class="display-6 text-center text-white mt-5" role="alert"></div>
    <div class="text-center">
      <a id="congrat" class="btn btn-secondary text-white mt-3" href="" style="background-color:rgb(98, 8, 8);" role="alert"></a>
    </div>
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>

<div class="" style="height: auto;">
      <div class="container-fruid">
        <div class="text-center">
          <img src="" id="quetion_count" class="mt-5" style="width:30%; height:auto;" alt="count question">
        </div>
      </div>

      <div class="container">
        <div>
          <div class="mt-2">
            <div style="text-align:center;">
            	<video id="quiz_image" poster="" src="" alt="" class="mx-3" width="90%" height="auto" controls playsinline type="video/mp4"></video>
            </div>
          </div>
        </div>
      </div>
<!--
      <div class="container">
        <div>
          <img src="" class="d-block mx-auto" id='quiz_image' style="width: 18rem;" alt="">
        </div>
      </div> -->

      <div class="container mt-2">
        <div id="js-items" class="d-flex justify-content-center">
          <div class="btn-group-vertical" role="group" aria-label="ボタングループサンプル">
            <div class="m-2">
              <button type="button" id="" style="width:150px !important; border-radius:100px !important; background-color:rgb(98, 8, 8);" class="btn text-white boab">Primary</button>
            </div>
            <div class="m-2">
              <button type="button" id="" style="width:150px !important; border-radius:100px !important; background-color:rgb(98, 8, 8);" class="btn text-white boab">Primary</button>
            </div>
            <div class="m-2">
              <button type="button" id="" style="width:150px !important; border-radius:100px !important; background-color:rgb(98, 8, 8);" class="btn text-white boab">Primary</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container-fruid mt-2">
    <div class="" style="height:80px; ">
      <div class="d-flex align-items-center justify-content-center text-white" style="height:100%;">
        <p class="mt-5">このクイズをする前に是非1度ゲームをお楽しみください。</p>
      </div>
  </div>

</body>

</html>

@endsection
