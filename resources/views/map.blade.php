@extends('layouts.tushima_map')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
  <div class="row row_mobile">
    <div class="col-sm mobile">
      <!-- <div class=""> -->
        <img src="video/img_s/map01.png" class="d-block mx-auto" usemap="#image-map">
      <!-- </div> -->
        <map name="image-map">
            <area target="" alt="" title="" href="javascript:map_function1();" class="map_point1" coords="180,235,31" shape="circle">
            <area target="" alt="" title="" href="javascript:map_function2();" class="map_point2" coords="317,524,31" shape="circle">
        </map>
    </div>

    <div class="col-sm">
      <div class="container" style="margin-right:100px;">
        <div class="">
          <img src="/video/img_s/trip_map01.png" class="float-md-end my-5" style="width:100%; height:auto; margin-top:100px !important;"  usemap="#image-map">
        </div>
        <div class="my-5">
          <div class="display-4 text-center" id="map_title">change</div>
          <div>
            <img src="video/img_l/temple01.jpg" class="d-block mx-auto" id='map_image' style="width: 80% !important;" alt="">
          </div>
          <div class="mt-5" id="map_describe">
            <h5>
              『Ghost of Tsushima』（ゴースト・オブ・ツシマ）は、Sucker Punch Productionsが開発し、ソニー・インタラクティブエンタテインメントより2020年7月17日に発売された、PlayStation 4用アクションアドベンチャーゲームである[1]。

    本作は文永11年（ユリウス暦1274年）の元朝による日本侵攻（文永の役）を題材としている[4]。
            </h5>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  function map_function1(){
    document.getElementById('map_title').textContent = "watatsumi-Jinjya ";
    document.getElementById('map_image').src = "video/img_l/temple01.jpg";
    document.getElementById('map_describe').textContent =  "In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.";
  }
  function map_function2(){
    // location.href = "/map";
    document.getElementById('map_title').textContent = "shiratake";
    document.getElementById('map_image').src = "video/img_l/map_image_02.jpg";
    document.getElementById('map_describe').textContent =  "In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.";
  }

</script>
@endsection
