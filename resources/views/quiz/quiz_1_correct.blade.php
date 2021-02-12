@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header text-center">Congratulation!!! {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($user->count > 1)
                    <div class="">
                      <img src="video/Links/Ghost-of-Tsushima_20200718201741-e1595133731951.jpg" style="width:350px; height:600;" class="d-block mx-auto" alt="ポップアップ画像">
                    </div>
                    @else
                    @endif

                    @if($user->count2 === 0 )
                      <div class="">
                        <p>Now unlocked Quiz2</p>
                      </div>
                      <div class="justify-content-center">
                        <button type="button" class="btn btn-primary m-4" style="width:30%;" onclick="location.href='/quiz_select'">Try Quiz2</button>
                      </div>
                    @else
                    <!-- <div class="text-center mt-3">
                      <h5>Back to Quiz Select</h5>
                    </div> -->
                    <div class="text-center">
                      <button type="button" class="btn btn-primary" style="width:30%;" onclick="location.href='/quiz_select'">Back to Quiz Select</button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="py-5">
              <button type="button" class="btn btn-secondary" onclick="location.href='/'">Back to top page</button>
            </div>
        </div>
    </div>
</div>
@endsection
