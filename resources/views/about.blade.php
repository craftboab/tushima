@extends('layouts.top')
@include('navbar.head')
@include('footer')

@section('content')


<div class="text-center" id="about" style="width:100%; height:auto; margin-top:10%;">
    <div class="container text-white">
      <div class="text-center">
        <img src="video/img_s/about_tushima.png" style="width:65%;" alt="">
      </div>
      <div class="text-center" style="">
        <p style="padding-left:13%; padding-right:13%;">GHOST OF TSUSHIMA unfolds in Tsushima, in the Genkai Sea in northern Kyushu, Japan.
  The island is part of Nagasaki Prefecture and boasts abundant nature with 89% of the terrain covered in mountains and forests.
  With most of East Asia just a stone’s throw away,
  it has also set the stage numerous historical events, including the Mongol invasions of Japan.</p>
      </div>
    </div>
</div>

<div class="text-center" style="width:100%; height:auto; margin-top:3%;">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div class="img-flex-2">
          <img class="" src="/video/img_l/spot_detail3_after_pc.png" style="width:75%; height: 25%;" alt="">
          <img class="mt-4" src="/video/img_l/spot_detail2_after_pc.png" style="width:75%; height: 25%;" alt="">
          <!-- <video id="video" src="video/clip/Top_m_kari.mp4" poster="video/clip/top_img.png" class="mx-3" style="width:500px !important; height:300px !important;" controls playsinline type="video/mp4"></video>
          <video id="video" src="video/clip/top_sample.mp4" poster="video/clip/top_img.png" class="mx-3" style="width:500px !important; height:300px !important;" controls playsinline type="video/mp4"></video> -->
        </div>
      </div>
    </div>
</div>

<div class="p-3 p-sm-5 text-center" style="width:100%; height:auto;">
    <div class="container">
      <div class="img-flex-3">
        <a href="https://www.tsushima-net.org">
          <img src="/video/banner/banner1.png" width="250" height="80" class="my-2 ml-2" alt="">
        </a>
        <!-- <a href="https://www.nagasaki-tabinet.com">
          <img src="/video/banner/banner2.png" width="250" height="80" class="mx-3 my-3" alt="">
        </a> -->
        <a href="https://www.playstation.com/en-us/games/ghost-of-tsushima/">
          <img src="/video/banner/banner3.png" width="250" height="80" class="my-2 m-2" alt="">
        </a>
      </div>
    </div>
</div>




@endsection
