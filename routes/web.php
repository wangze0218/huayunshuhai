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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/about_us', function () {
    return view('front.about_us');
});

Route::get('/cooperative_partner', function () {
    return view('front.cooperative_partner');
});

Route::get('/service', 'Front\FrontController@service');

Route::get('news_center',function (){
    return view('front.news_center');
});

Route::get('solution',function (){
    return view('front.solution');
});

//
//========================================================================================================
//
//========================================================================================================
//
//========================================================================================================
Route::resource('/sign_in','Front\SignInController');
Route::group(['middleware' => 'BehindMiddleware'],function (){
    //后台首页
    Route::get('/behind', function () {
        return view('behind.index');
    });
    //用户管理
    Route::resource('/behind/user','Behind\UserController');
    Route::resource('/behind/article','Behind\ArticleController');
});






