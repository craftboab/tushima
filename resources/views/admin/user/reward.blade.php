@extends('layouts.app_admin')

@section('content')
<div class="container">
  <div class="justify-content-center">


    <div class="text-center">
      <h5>
        Reward User List
      </h5>
    </div>

    <!-- <form method="post" class="mt-5" action="{{ url('admin/list_update')}}"> -->


      @foreach ($users as $user)
      @if ($user->count > 0 && $user->count2 > 0)
      <ul style="border-bottom: 1px solid #ccc;">
        <div class="">
          <!-- <li>
            <div class="checkbox">
              <label class="checkbox-inline">
                  <input type="checkbox" name="user_check" value="1">
              </label>
            </div>
          </li> -->
          <li>{{ $user->id }}: </li>
          <li>{{ $user->name }}</li>
          <li>{{ $user->email }}</li>
        </div>
        <div class="">
          <li style="width:auto; margin-right:10%;">{{ $user->address }}</li>
          <li>{{ $user->country }}</li>
          <li>{{ $user->created_at }}</li>
        </div>
      </ul>
      @endif

      @endforeach

      <!-- <p><input type="submit" value="update"></p> -->

    <!-- </form> -->


    <div class="text-right">
      <button type="button" class="btn btn-secondary mr-2" onclick="location.href='/admin/home'">Back</button>
    </div>

  </div>
  <div class="row justify-content-center">
           {{ $users->links() }}
       </div>
</div>

@endsection
