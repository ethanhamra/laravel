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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/test/{angka}', function($angka) {
//    return view('test', ["angka" => $angka]);
//});

//Route::get('/halo/{nama}', function($nama){
//    return "Halo $nama !";
//});

//Route::get('/form', 'RegisterController@form');

//Route::get('/sapa', 'RegisterController@sapa');
//Route::post('/sapa', 'RegisterController@sapa_post');

//project Laravel 1
Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::get('/welcome', 'AuthController@welcome');

Route::get('/master', function() {
    return view('adminlite.master');
});

Route::get('/hari3', function(){
    return view('adminlite.items.index');
});

Route::get('/hari3/data', function(){
    return view('adminlite.items.data');
});