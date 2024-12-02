<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : ada kesalahan di server</h1>";
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

// coba coba

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');


Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

// route ets
Route::get('/home1', 'App\Http\Controllers\EtsController@home1');
Route::get('/home1/hello', 'App\Http\Controllers\EtsController@hello');
Route::get('/home1/style', 'App\Http\Controllers\EtsController@style');
Route::get('/home1/style2', 'App\Http\Controllers\EtsController@style2');
Route::get('/home1/responsive', 'App\Http\Controllers\EtsController@responsive');
Route::get('/home1/form', 'App\Http\Controllers\EtsController@form');
Route::get('/home1/linktree', 'App\Http\Controllers\EtsController@linktree');
Route::get('/home1/testimoni', 'App\Http\Controllers\EtsController@testimoni');

//route CRUD
Route::get('/pegawaiDB','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawaiDB/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawaiDB/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawaiDB/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawaiDB/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawaiDB/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawaiDB/cari','App\Http\Controllers\PegawaiDBController@cari');

//route bolpen
Route::get('/pegawaiDB/bolpen','App\Http\Controllers\BolpenController@indexbolpen');
Route::get('/pegawaiDB/bolpen/tambah','App\Http\Controllers\BolpenController@tambahbolpen');
Route::get('/pegawaiDB/bolpen/edit/{kode}','App\Http\Controllers\BolpenController@editbolpen');
Route::get('/pegawaiDB/bolpen/cari','App\Http\Controllers\BolpenController@caribolpen');
Route::post('/pegawaiDB/bolpen/storebolpen','App\Http\Controllers\BolpenController@storebolpen');
Route::get('/pegawaiDB/bolpen/hapus/{kode}','App\Http\Controllers\BolpenController@hapusbolpen');
Route::post('/pegawaiDB/bolpen/update','App\Http\Controllers\BolpenController@updatebolpen');
