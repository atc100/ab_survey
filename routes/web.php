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
    return view('login');
});

Route::get('survey', function () {
    return view('survey');
});

Route::get('adminlogin', function () {
    return view('adminlogin');
});

/*Route::get('upload', 'adminController@showForm');*/

Route::get('upload', function () {
    return view('uploadForm');
});


Route::post('upload_students', 'adminController@getfile');


Route::get('addTAs', function() {
    return view('addTAs');
});

Route::post('addNumTAs', 'adminController@addNumTAs');


Route::post('checklogin', 'loginController@index');

Route::post('update_db', 'surveyController@updateDB');

Route::post('checkAdminLogin', 'loginController@admin');


/*
 Route::get('alex', function () {
    return view('survey');
});
*/
?>


