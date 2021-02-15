@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
                <div class="display-4 text-white text-center">Game Over</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                      <img src="video/img_l/quiz_fail.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-secondary mt-5" onclick="location.href='/quiz_select'">Try Again</button>
                    </div>
            <div class="py-5 text-center">
              <button type="button" class="btn btn-secondary" onclick="location.href='/'">Back to top page</button>
            </div>
        </div>
    </div>
</div>
@endsection
