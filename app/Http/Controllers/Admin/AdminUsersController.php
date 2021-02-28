<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\User;
use Auth;
use Validator;

class AdminUsersController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    public function list()
    {
      $users = User::paginate(50);
      return view('admin/user/list', compact('users'));
    }

    public function reward()
    {
      $users = User::paginate(50);
      return view('admin/user/reward', compact('users'));
    }

    public function quiz_count()
    {
      $users = User::paginate(50);
      return view('admin/user/quiz_count', compact('users'));
    }

    // public function update(Request $request)
    // {
    //
    //   foreach()
    //   if ($request->user_check === 1) {
    //
    //   }
    // }

    public function done()
    {
      $users = User::paginate(50);
      return view('admin/user/done', compact('users'));
    }

    public function all()
    {
      $users = User::paginate(50);
      return view('admin/user/all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
