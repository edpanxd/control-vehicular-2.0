<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});




Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/dashboard', 'App\Http\Controllers\dashboardController');
    Route::get('/dashboardd/{p}', 'App\Http\Controllers\dashboardController@create');
    Route::get('/dashboardv/{p}', 'App\Http\Controllers\dashboardController@create2');
    Route::get('/dashboardvh/{id}', 'App\Http\Controllers\dashboardController@perfil');
   //ruta vehiculo
    Route::resource('/vehiculo', 'App\Http\Controllers\VehiculoController');
   Route::get('/vehiculod/{id}', 'App\Http\Controllers\VehiculoController@destroy');

   //ruta placas
   Route::resource('/placa', 'App\Http\Controllers\PlacasController');
   Route::get('/placad/{id}', 'App\Http\Controllers\PlacasController@destroy');
   
   //ruta polizas
   Route::resource('/poliza', 'App\Http\Controllers\polizaController');
   Route::get('/polizad/{id}', 'App\Http\Controllers\polizaController@destroy');

   //ruta tenencia
   Route::resource('/tenencia', 'App\Http\Controllers\tenenciaController');
   Route::get('/tenenciad/{id}', 'App\Http\Controllers\tenenciaController@destroy');

   //ruta verificacion a
   Route::resource('/verificacion_a', 'App\Http\Controllers\Verificacion_aController');
   Route::get('/verificacion_ad/{id}', 'App\Http\Controllers\Verificacion_aController@destroy');
   
   //ruta verificacion b
   Route::resource('/verificacion_b', 'App\Http\Controllers\verificacion_bController');
   Route::get('/verificacion_bd/{id}', 'App\Http\Controllers\verificacion_bController@destroy');

   //ruta verificacion federal
   Route::resource('/verificacion_f', 'App\Http\Controllers\verificacion_fController');
   Route::get('/verificacion_fd/{id}', 'App\Http\Controllers\verificacion_fController@destroy');

   //ruta fisico mecanico
   Route::resource('/fisico_m', 'App\Http\Controllers\fisico_mController');
   Route::get('/fisico_md/{id}', 'App\Http\Controllers\fisico_mController@destroy');


});
