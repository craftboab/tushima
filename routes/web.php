<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/


// Route::get('/quiz', function() {
//   return view('/quiz');
// });

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/select_lang', function() {
      return view('/select_lang'); });

    Route::get('/quiz_select', 'QuizController@quiz_select');
    Route::get('/quiz_1', 'QuizController@quiz_1');
    Route::get('/quiz_1_correct', 'QuizController@quiz_1_correct');
    Route::get('/quiz_1_fail', 'QuizController@quiz_1_fail');
    Route::get('/quiz_2', 'QuizController@quiz_2');
    Route::get('/quiz_2_correct', 'QuizController@quiz_2_correct');
    Route::get('/quiz_2_fail', 'QuizController@quiz_2_fail');



    Route::get('/quiz_select_jp', 'QuizJpController@quiz_select');
    Route::get('/quiz_1_jp', 'QuizJpController@quiz_1');
    Route::get('/quiz_1_correct_jp', 'QuizJpController@quiz_1_correct');
    Route::get('/quiz_1_fail_jp', 'QuizJpController@quiz_1_fail');
    Route::get('/quiz_2_jp', 'QuizJpController@quiz_2');
    Route::get('/quiz_2_correct_jp', 'QuizJpController@quiz_2_correct');
    Route::get('/quiz_2_fail_jp', 'QuizJpController@quiz_2_fail');

    // Route::get('/map', function(){
    //   return view('map'); });
    // Route::get('/special', function(){
    //   return view('special'); });
    // Route::get('/about', function(){
    //   return view('about'); });
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});
