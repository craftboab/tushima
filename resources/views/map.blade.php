@extends('layouts.tushima_map')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
  <div class="row row_mobile">
    <div class="col-sm mobile">

      <img src="" id="title" class="float-md-end my-5" style="width:100%; height:auto; margin-bottom: -30px !important;"  usemap="#image-map">

      <div class="" style="">
        <img src="video/img_s/map_comp.png" class="d-block mx-auto" usemap="#image-map">
      </div>

      <map name="image-map">
        <area target="" alt="" title="" href="javascript:map_function1()" coords="219,360,21" shape="circle">
        <area target="" alt="" title="" href="javascript:map_function2()" coords="104,456,23" shape="circle">
        <area target="" alt="" title="" href="javascript:map_function1()" coords="121,157,25" shape="circle">
      </map>
    </div>

    <div class="col-sm regular mobile2">
      <div class="container" style="margin-right:100px;">

        <div class="my-2">
          <img src="" id="title2" class="float-md-end my-3" style="width:120% !important; height:auto;"  usemap="#image-map">
          <h2 class="text-left" id="map_title">WATADUMI SHRINE</h2>
          <!-- <h3 class="text-left" id="map_title_sub">和多都美神社</h3> -->
          <div>
            <img src="video/img_l/temple01.jpg" class="d-block mx-auto" id='map_image' style="width: 100% !important; margin-top:20px !important;" alt="">
          </div>
          <div class="mt-3" style="width:100% !important;" id="map_describe">
            <h6>
              GHOST OF TSUSHIMA unfolds in Tsushima, in the Genkai Sea in northern Kyushu, Japan.
        The island is part of Nagasaki Prefecture and boasts abundant nature with 89% of the terrain covered in mountains and forests.
        With most of East Asia just a stone’s throw away,
        it has also set the stage numerous historical events, including the Mongol invasions of Japan.
      </h6>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>

const title = document.getElementById("title");
const title2 = document.getElementById("title2");

if (window.matchMedia('(max-width: 767px)').matches) {
    //スマホ処理
    // title2.src = "";
    title.src = "/video/img_s/trip_map01.png";
} else if (window.matchMedia('(min-width:768px)').matches) {
    // title.src = "";
    title2.src = "/video/img_s/trip_map01.png";

}

</script>

<script>
  function map_function1(){
    document.getElementById('map_title').textContent = "watatsumi-Jinjya ";
    // document.getElementById('map_title_sub').textContent = "和多都美神社";
    document.getElementById('map_image').src = "video/img_l/temple01.jpg";
    document.getElementById('map_describe').textContent =  "In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.";
  }
  function map_function2(){
    // location.href = "/map";
    document.getElementById('map_title').textContent = "shiratake";
    // document.getElementById('map_title_sub').textContent = "白嶽";
    document.getElementById('map_image').src = "video/img_l/map_image_02.jpg";
    document.getElementById('map_describe').textContent =  "In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.";
  }

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>
@endsection
