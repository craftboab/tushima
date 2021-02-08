@extends('layouts.app')
@include('navbar.navbar')
@include('footer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Congratulation!!! {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                      <p>Now unlocked Quiz2</p>
                    </div>
                    <div class="justify-content-center">
                      <button type="button" class="btn btn-primary m-4" style="width:30%;" onclick="location.href='/quiz_select'">Try Quiz2</button>
                    </div>
                </div>
            </div>
            <div class="py-5">
              <button type="button" class="btn btn-secondary" onclick="location.href='/'">Back to top page</button>
            </div>
        </div>
    </div>
</div>
@endsection
