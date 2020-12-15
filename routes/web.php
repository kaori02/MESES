<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Route::get('/tutor', 'HomeController@tutor');

Route::get('/tutor/soals', 'SoalController@tutor');
Route::get('/tutor/kelas', 'KelasController@tutor');

Route::resource('soals', 'SoalController');
Route::resource('videos', 'VideoController');
Route::resource('kelases', 'KelasController');
