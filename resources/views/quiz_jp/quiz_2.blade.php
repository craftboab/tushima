@extends('layouts.quiz')
@include('navbar.head')
@include('footer')

@section('content')
<script src="{{ asset('js/quiz2_jp.js') }}" defer></script>

<!--  modal finish -->
<div class="popup" id="js-popup">
  <div class="popup-inner">
    <h1>Finish</h1>
    <!-- <img src="images/tushima_timeover.jpg" alt="ポップアップ画像"> -->
    <div id="result" class="alert alert-primary mt-5" role="alert"></div>
    <div class="text-center">
      <a id="congrat" class="btn btn-primary" href="" style="color:white;" role="alert"></a>
    </div>
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>

<div class="" style="height: auto;">
      <div class="container-fruid">
        <div class="text-center">
          <img src="" id="quetion_count" class="mt-5" style="width:30%; height:auto;" alt="count quetion">
        </div>
      </div>

      <div class="container">
        <div>
          <div class="mt-1">
            <div style="text-align:center; margin-top: -10% !important;">
            	<video id="quiz_image" poster="" src="" alt="" class="" width="90%" height="auto" controls playsinline type="video/mp4"></video>
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
              <button type="button" id="" style="width:150px !important; background-color:rgb(115, 11, 49);" class="btn btn-danger boab">Primary</button>
            </div>
            <div class="m-2">
              <button type="button" id="" style="width:150px !important; background-color:rgb(115, 11, 49);" class="btn btn-danger boab">Primary</button>
            </div>
            <div class="m-2">
              <button type="button" id="" style="width:150px !important; background-color:rgb(115, 11, 49);" class="btn btn-danger boab">Primary</button>
            </div>
            <!-- <div class="m-2">
              <button type="button" id="" style="width:300px; background-color:rgb(115, 11, 49);" class="btn btn-danger boab">Primary</button>
            </div> -->
          </div>

        </div>
      </div>
  </div>

</body>

</html>

@endsection
