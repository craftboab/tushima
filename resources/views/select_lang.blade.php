@extends('layouts.app')

@include('footer')

@section('content')

<div class="container">
  <div class="justify-content-center" style="height:100vh;">
    <div class="" style="text-align:center;">
      <div class="display-5 text-white mb-5" style="padding-top:30%;">
        language
      </div>
        <button type="button" class="btn mx-2 text-white" style="width:30%; background-color:rgb(98, 8, 8)" onclick="location.href='/quiz_select'">English</button>
        <button type="button" class="btn mx-2 text-white" style="width:30%; background-color:rgb(98, 8, 8)" onclick="location.href='/quiz_select_jp'">Japanese</button>
    </div>
  </div>
</div>


@endsection
