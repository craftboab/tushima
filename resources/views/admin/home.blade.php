@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi {{ $admin->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-secondary mr-2" onclick="location.href='/admin/list'">List</button>
                    <button type="button" class="btn btn-secondary mr-2" onclick="location.href='/admin/reward'">Reward Users</button>
                    <button type="button" class="btn btn-secondary mr-2" onclick="location.href='/admin/quiz_count'">Quiz Count</button>
                    <!-- <button type="button" class="btn btn-secondary mx-2" onclick="location.href='/admin/done'">Done</button>
                    <button type="button" class="btn btn-secondary ml-2" onclick="location.href='/admin/all'">All</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
