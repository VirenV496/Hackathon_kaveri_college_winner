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

Route::get('/k', function () {
    return view('welcome');
});


Route::get('/clg',function () {
	return view('college');
});

Route::get('/Dashboard',function () {
	return view('Dashboard');
});

Route::get('/ActivityPage',function () {
	return view('Activitymain');
});

Route::get('/FAQ',function () {
	return view('faq');
});

Route::get('/Video',function () {
	return view('video1');
});

Route::get('/feedback',function () {
	return view('feedback');
});


Route::get('/Index',function () {
	return view('index');
});

Route::get('/About',function () {
	return view('about');
});

Route::post('/Insert','Register@Insert');


Route::get('/Shoe','controller@GetShoe');

Route::get('/Profile','controller@getprofile');