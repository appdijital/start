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

Route::get('/',array('uses'=>'App\Http\Controllers\AnaSayfaController@index'))->name('ana_sayfa');
Route::get('/test',array('uses'=>'App\Http\Controllers\AnaSayfaController@test'))->name('test');


Route::get('/company/{id}/customers/born-after/{id1}',array('uses'=>'App\Http\Controllers\AnaSayfaController@cek'))->name('cek');



