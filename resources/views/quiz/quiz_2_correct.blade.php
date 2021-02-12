@extends('layouts.app')
@include('navbar.head')
@include('footer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">complete!!! {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($user->count2 === 1)
                    <div class="">
                      <p>Congratulation {{$user->name}} You got reward!</p>
                    </div>
                    <div class="justify-content-center">
                      <button type="button" class="btn btn-primary m-4" style="width:30%;" onclick="location.href='/">Back to the Top page</button>
                    </div>
                    @else
                    <div class="">
                      <p>Thank you for playing</p>
                    </div>
                    <div class="justify-content-center">
                      <button type="button" class="btn btn-primary m-4"  onclick="location.href='/'">Back to Top page</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
