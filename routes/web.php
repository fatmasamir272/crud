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
Route::group(['perfix'=>'admin','namespace'=>'Admin'], function () { //bring al controllers  in namespace admin
Config::set('auth.defines','admin'); ////set admin guards from auth.php
Route::get('admin/login','AdminAuth@login'); //method of type get
Route::post('admin/login','AdminAuth@dologin'); //method of type post
Route::get('admin/forgot/password','AdminAuth@forgot_password');
Route::post('admin/forgot/password','AdminAuth@forgot_password_post');
Route::get('admin/reset/password/{token}','AdminAuth@reset_password');
Route::post('admin/reset/password/{token}','AdminAuth@reset_password_final');

Route::group(['middleware'=>'admin:admin'], function () { //:admin name of gaurd
Route::resource('admin/contacts', 'ContactsController');
Route::delete('admin/contacts/destroy/all', 'ContactsController@multi_delete');

Route::get('/admin', function () {
    return view('home');
});


});

Route::get('admin/lang/{lang}', function ($lang) {
				session()->has('lang')?session()->forget('lang'):'';
				$lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
				return back();
			});
});

 Route::get('lang/{lang}', function ($lang) {
				session()->has('lang')?session()->forget('lang'):'';
				$lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
				return back();
			});
Route::get('/', function () {
    return view('index');
});
