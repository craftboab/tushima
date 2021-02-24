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
    Route::get('/quiz_en_correct_1', 'QuizController@quiz_en_correct_1');
    Route::get('/quiz_en_fail_1_0', 'QuizController@quiz_en_fail_1_0');
    Route::get('/quiz_en_fail_1_1', 'QuizController@quiz_en_fail_1_1');
    Route::get('/quiz_en_fail_1_2', 'QuizController@quiz_en_fail_1_2');
    Route::get('/quiz_en_fail_1_3', 'QuizController@quiz_en_fail_1_3');
    Route::get('/quiz_en_fail_1_4', 'QuizController@quiz_en_fail_1_4');

    Route::get('/quiz_2', 'QuizController@quiz_2');
    Route::get('/quiz_en_correct_2', 'QuizController@quiz_en_correct_2');
    Route::get('/quiz_en_fail_2_0', 'QuizController@quiz_en_fail_2_0');
    Route::get('/quiz_en_fail_2_1', 'QuizController@quiz_en_fail_2_1');
    Route::get('/quiz_en_fail_2_2', 'QuizController@quiz_en_fail_2_2');
    Route::get('/quiz_en_fail_2_3', 'QuizController@quiz_en_fail_2_3');
    Route::get('/quiz_en_fail_2_4', 'QuizController@quiz_en_fail_2_4');

    Route::get('/quiz_select_jp', 'QuizJpController@quiz_select');
    Route::get('/quiz_1_jp', 'QuizJpController@quiz_1');
    Route::get('/quiz_jp_correct_1', 'QuizJpController@quiz_jp_correct_1');
    Route::get('/quiz_jp_fail_1_0', 'QuizJpController@quiz_jp_fail_1_0');
    Route::get('/quiz_jp_fail_1_1', 'QuizJpController@quiz_jp_fail_1_1');
    Route::get('/quiz_jp_fail_1_2', 'QuizJpController@quiz_jp_fail_1_2');
    Route::get('/quiz_jp_fail_1_3', 'QuizJpController@quiz_jp_fail_1_3');
    Route::get('/quiz_jp_fail_1_4', 'QuizJpController@quiz_jp_fail_1_4');

    Route::get('/quiz_2_jp', 'QuizJpController@quiz_2');
    Route::get('/quiz_jp_correct_2', 'QuizJpController@quiz_jp_correct_2');
    Route::get('/quiz_jp_fail_2_0', 'QuizJpController@quiz_jp_fail_2_0');
    Route::get('/quiz_jp_fail_2_1', 'QuizJpController@quiz_jp_fail_2_1');
    Route::get('/quiz_jp_fail_2_2', 'QuizJpController@quiz_jp_fail_2_2');
    Route::get('/quiz_jp_fail_2_3', 'QuizJpController@quiz_jp_fail_2_3');
    Route::get('/quiz_jp_fail_2_4', 'QuizJpController@quiz_jp_fail_2_4');

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
