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
    return view('auth.login');
});

Route::get('/bitacora', 'App\Http\Controllers\BitacoraController@index');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   //ruta vehiculo
    Route::resource('/vehiculo', 'App\Http\Controllers\VehiculoController');
   Route::get('/vehiculod/{id}', 'App\Http\Controllers\VehiculoController@destroy');

   //ruta placas
   Route::resource('/placa', 'App\Http\Controllers\PlacasController');
   Route::get('/placad/{id}', 'App\Http\Controllers\PlacasController@destroy');

});
