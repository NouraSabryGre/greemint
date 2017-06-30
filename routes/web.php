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



Route::get('/schedule', 'ScheduleController@index');


Route::get('/donations', function () {
  return view('donations');
});


Route::get('/find', 'SearchController@index');


// VIEW

Route::get('view/familymembers', 'FamilyController@index');

Route::get('view/user/{id}', 'FamilyController@show');


Route::get('view/doctor/{id}', 'DoctorController@show');


Route::get('view/place/{id}', function() {
  return view('view.place');
});



Route::get('/doctor/{id}','DoctorController@profile');


Route::get('/doctor/view/user/{code}', 'UserController@showWithCode');


Route::get('/code/{name}' , 'CodeController@create');





Route::get('/portfolio/view/{id}' ,'PortfoiloController@show');

Route::get('/portfolio/new/{name}' ,'PortfoiloController@create');

Route::post('/portfolio/new' ,'PortfoiloController@viewNew');

Route::get('/portfolio/{id}/prescription/new' ,'PortfoiloController@newPrescription');

Route::post('/portfolio/{id}/prescription/new' ,'PortfoiloController@storePrescription');


Route::get('/drug/search/{key}' , 'DrugController@search');
