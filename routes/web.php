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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

//función para poder agrupar links
Route::group(['prefix' => 'v1'], function(){
    Route::resource('solicitud', 'App\Http\Controllers\ControllerSolicitud');

    /*Route::resource('registration', 'App\Http\Controllers\RegitrationController', 
    ['only' => ['store', 'destroy']]);
    
    Route::post('user', ['uses' => 'App\Http\Controllers\AuthController@store']);
    
    Route::post('user/signin', ['uses' => 'App\Http\Controllers\AuthController@signin']);*/
});
