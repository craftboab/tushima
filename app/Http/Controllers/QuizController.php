<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use Validator;



class QuizController extends Controller
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

    public function quiz_select()
    {
        $user = Auth::user();
        return view('/quiz/quiz_select', compact('user'));
    }

    public function quiz_1()
    {
      $user = Auth::user();
      return view('/quiz/quiz_1', compact('user'));
      // $user->count = true;
      // return view('/quiz', ['user' => $user]);
    }
    public function quiz_en_correct_1()
    {
      $user = Auth::user();
      $user->count += 1;
      $user->save();
      return view('/quiz/quiz1/quiz_en_correct_1', compact('user'));
    }
    public function quiz_en_fail_1_0()
    {
      $user = Auth::user();
      return view('/quiz/quiz1/quiz_en_fail_1_0', compact('user'));
    }
    public function quiz_en_fail_1_1()
    {
      $user = Auth::user();
      return view('/quiz/quiz1/quiz_en_fail_1_1', compact('user'));
    }
    public function quiz_en_fail_1_2()
    {
      $user = Auth::user();
      return view('/quiz/quiz1/quiz_en_fail_1_2', compact('user'));
    }
    public function quiz_en_fail_1_3()
    {
      $user = Auth::user();
      return view('/quiz/quiz1/quiz_en_fail_1_3', compact('user'));
    }
    public function quiz_en_fail_1_4()
    {
      $user = Auth::user();
      return view('/quiz/quiz1/quiz_en_fail_1_4', compact('user'));
    }


    public function quiz_2()
    {
        $user = Auth::user();
        return view('/quiz/quiz_2', compact('user'));
    }

    public function quiz_en_correct_2()
    {
      $user = Auth::user();
      $user->count2 += 1;
      $user->save();
      return view('/quiz/quiz2/quiz_en_correct_2', compact('user'));
    }

    public function quiz_en_fail_2_0()
    {
      $user = Auth::user();
      return view('/quiz/quiz2/quiz_en_fail_2_0', compact('user'));
    }
    public function quiz_en_fail_2_1()
    {
      $user = Auth::user();
      return view('/quiz/quiz2/quiz_en_fail_2_1', compact('user'));
    }
    public function quiz_en_fail_2_2()
    {
      $user = Auth::user();
      return view('/quiz/quiz2/quiz_en_fail_2_2', compact('user'));
    }
    public function quiz_en_fail_2_3()
    {
      $user = Auth::user();
      return view('/quiz/quiz2/quiz_en_fail_2_3', compact('user'));
    }
    public function quiz_en_fail_2_4()
    {
      $user = Auth::user();
      return view('/quiz/quiz2/quiz_en_fail_2_4', compact('user'));
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
    public function update(Request $request, $id)
    {
        //
    }

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
