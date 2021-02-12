@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<script src="{{ asset('js/quiz.js') }}" defer></script>

<!--  modal finish -->
<div class="popup" id="js-popup">
  <div class="popup-inner">
    <h1>Finish</h1>
    <img src="images/tushima_timeover.jpg" alt="ポップアップ画像">
    <div id="result" class="alert alert-primary mt-5" role="alert"></div>
    <div class="text-center">
      <a id="congrat" class="btn btn-primary" href="" style="color:white;" role="alert"></a>
    </div>
  </div>
  <div class="black-background" id="js-black-bg1"></div>
</div>



<div class="">

  <div class="jumbotron bg-dark" style="height: 600px">
    <div class="">

      <div class="container-fruid">
        <div id="quetion_count" class="alert alert-primary"></div>
      </div>
      <div class="container-fruid">
        <div id="js-question" class="alert alert-primary" role="alert"></div>
      </div>

      <div class="container">
        <div>
          <img src="" class="d-block mx-auto" id='quiz_image' style="width: 18rem;" alt="">
        </div>
      </div>

      <div class="container mt-5">
        <div id="js-items" class="d-flex justify-content-center">
          <div class="row">
            <div class="m-2">
              <button type="button" id="" class="btn btn-primary boab">Primary</button>
            </div>
            <div class="m-2">
              <button type="button" id="" class="btn btn-primary boab">Primary</button>
            </div>
          </div>
          <div class="row">
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
  </div>


</div>

</body>

</html>

@endsection
