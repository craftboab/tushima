@extends('layouts.app_admin')

@section('content')
<div class="container">
  <div class="justify-content-center">


    <div class="text-center">
      <h5>
        User list
      </h5>
    </div>

    <form method="post" class="mt-5" action="{{ url('admin/list_update')}}">


      @foreach ($users as $user)
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
          </div>
        </ul>

      @endforeach

      <!-- <p><input type="submit" value="update"></p> -->

    </form>


    <div class="text-right">
      <button type="button" class="btn btn-secondary mr-2" onclick="location.href='/admin/home'">Back</button>
    </div>

  </div>
  <div class="row justify-content-center">
           {{ $users->links() }}
       </div>
</div>

@endsection
