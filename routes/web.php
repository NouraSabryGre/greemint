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
  return redirect('/user/2');
});

Auth::routes();


Route::get('/user/{id}', 'UserController@show');

Route::get('/schedule', function () {
  return view('schedule');
});


Route::get('/donations', function () {
  return view('donations');
});


Route::get('/find', function(){
  return view('search');
});


// VIEW

Route::get('view/familymembers', 'FamilyController@index');

Route::get('view/user/{id}', function() {
  return view('view.user');
});


Route::get('view/doctor/{id}', function() {
  return view('view.doctor');
});


Route::get('view/place/{id}', function() {
  return view('view.place');
});
