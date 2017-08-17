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


// Route::post('alex', 'loginController@index');

Route::post('checklogin', 'loginController@index');

Route::post('update_db', 'surveyController@updateDB');


/*
 Route::get('alex', function () {
    return view('survey');
});
*/
?>


