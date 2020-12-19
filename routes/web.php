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

route::get('/home','LmsController@index');

Route::get('/tes', 'HomeController@index')->name('home');
Route::get('/setting','SettingController@index');
Route::get('/profil','SettingController@profil');
Route::get('/pelajaran','PelajaranController@index');
Route::get('/matematika','PelajaranController@mtk');
Route::get('/ipa','PelajaranController@ipa');
Route::get('/absen','LmsController@absen');
Route::get('/tugas','LmsController@tugas');
Route::get('/jawaban','LmsController@jawab');


route::get('/dasboard','SiswaController@index')->name('index');
route::get('/menu','SiswaController@Siswa')->name('Siswa');
route::get('/materi','SiswaController@Materi')->name('Materi');