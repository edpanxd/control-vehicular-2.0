<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/bitacora', 'App\Http\Controllers\BitacoraController@index');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function(){
        return view('dash.index');
    });
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

});
