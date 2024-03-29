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
Route::post('/store', 'App\Http\Controllers\Api\FormController@Store')->name('store');
Route::get('/find', 'App\Http\Controllers\Api\FormController@Find')->name('find');

Route::get('/', function () {
    return view('index');
});
