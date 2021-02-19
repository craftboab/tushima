@extends('layouts.top')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container-fruid">
  <div class="" style="height:60px; background-color:rgb(103, 51, 65);">
    <div class="d-flex align-items-center justify-content-center" style="height:100%;">
      @guest
      <a class="btn btn-secondary" href="{{ route('login') }}">get reward</a>
      @else
      <a class="btn btn-secondary" href="/quiz_select">get reward</a>
      @endguest
    </div>
  </div>
</div>
<div class="">
  <div class="video-container">
    <video class="clip" src="video/clip/top_sample.mp4" poster="video/clip/top_sample.png" controls autoplay muted loop playsinline type="video/mp4"></video>
    <!-- <div class="callout">
      @guest
      <a href="{{ route('login') }}">
        <img src="/video/img_s/tushima_logo.png" class="logo mb-5 pb-5" alt="">
      </a>
      @else
      <a href="/quiz_select">
        <img src="/video/img_s/tushima_logo.png" class="logo mb-5 pb-5" alt="">
      </a>
      @endguest
    </div> -->
  </div>
</div>



  <!-- <div class="p-3 p-sm-5 text-center" style="width:100%; height:auto; margin-top:5%;">
      <div class="container">
        <div class="d-flex align-items-center justify-content-center">
          <div class="img-flex-2">
            <video id="video" src="video/clip/Top_m_kari.mp4" poster="video/clip/top_img.png" class="mx-3" style="width:500px !important; height:300px !important;" controls playsinline type="video/mp4"></video>
            <video id="video" src="video/clip/top_sample.mp4" poster="video/clip/top_img.png" class="mx-3" style="width:500px !important; height:300px !important;" controls playsinline type="video/mp4"></video>
          </div>
        </div>
      </div>
  </div> -->


<!-- <div class="text-center" id="about" style="width:100%; height:auto; margin-top:10%;">
    <div class="container text-white">
      <div class="text-center">
        <img src="video/img_s/about_tushima.png" style="width:60%;" alt="">
      </div>
      <h5 style="padding-left:10%; padding-right:10%;">GHOST OF TSUSHIMA unfolds in Tsushima, in the Genkai Sea in northern Kyushu, Japan.
The island is part of Nagasaki Prefecture and boasts abundant nature with 89% of the terrain covered in mountains and forests.
With most of East Asia just a stone’s throw away,
it has also set the stage numerous historical events, including the Mongol invasions of Japan.</h5>
    </div>
</div> -->


<!-- <div class="text-center justify-content-center" style="margin-top:2%;">
    <div class="container">
      <div class="wrapp">
          <img src="/video/img_l/spot_detail3_after_pc.png" style="width:80% !important; height:0% !important;" class="mr-3 my-3" alt="">
          <img src="/video/img_l/spot_detail2_after_pc.png" style="width:80% !important; height:0% !important;" class="mr-3 my-3" alt="">
      </div>
    </div>
</div> -->


<!-- <div class="p-3 p-sm-5 text-center" style="width:100%; height:auto;">
    <div class="container">
      <div class="img-flex-3">
        <a href="https://www.tsushima-net.org">
          <img src="/video/banner/banner1.png" width="250" height="80" class="my-3" alt="">
        </a>
        <a href="https://www.nagasaki-tabinet.com">
          <img src="/video/banner/banner2.png" width="250" height="80" class="mx-3 my-3" alt="">
        </a>
        <a href="https://www.playstation.com/en-us/games/ghost-of-tsushima/">
          <img src="/video/banner/banner3.png" width="250" height="80" class="my-3" alt="">
        </a>
      </div>
    </div>
</div> -->


@endsection
