@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<div class="p-3 p-sm-5 text-center" style="width:100%; height:auto; margin-top:5%;">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div class="img-flex-2">
          <video id="video" src="video/Top_m_kari.mp4" class="mx-3" width="45%" height="25%" controls type="video/mp4"></video>
          <video id="video" src="video/Top_m_kari.mp4" class="mx-3" width="45%" height="25%" controls type="video/mp4"></video>
        </div>
      </div>
    </div>
</div>



@endsection
