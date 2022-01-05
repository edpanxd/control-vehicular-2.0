<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/dashboard', 'App\Http\Controllers\dashboardController');
Route::get('/tarjetaV', 'App\Http\Controllers\dashboardController@vehiculos');
Route::get('/eventos', 'App\Http\Controllers\dashboardController@eventos');
Route::get('/grafica', 'App\Http\Controllers\dashboardController@grafica');
Route::get('/dashboardvh/{id}', 'App\Http\Controllers\dashboardController@perfil');
Route::get('/dashboardvim/{id}', 'App\Http\Controllers\dashboardController@imprimir');



Route::get('/ExcelTene', 'App\Http\Controllers\ExcelController@exportartenencia');
Route::get('/ExcelFisico', 'App\Http\Controllers\ExcelController@fisico');
Route::get('/ExcelPlacas', 'App\Http\Controllers\ExcelController@placas');
Route::get('/ExcelPolizas', 'App\Http\Controllers\ExcelController@exportarpolizas');
Route::get('/ExcelTarjeta', 'App\Http\Controllers\ExcelController@tarjetas');
Route::get('/ExcelVE1', 'App\Http\Controllers\ExcelController@exportarverificacione1');
Route::get('/ExcelVE2', 'App\Http\Controllers\ExcelController@exportarverificacione2');
Route::get('/ExcelVF1', 'App\Http\Controllers\ExcelController@exportarverificacionf1');
Route::get('/ExcelVF2', 'App\Http\Controllers\ExcelController@exportarverificacionf2');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {    
    Route::get('/dashboardd/{p}', 'App\Http\Controllers\dashboardController@create');
    Route::get('/dashboardv/{p}', 'App\Http\Controllers\dashboardController@verificacion');
    Route::get('/dashboardvehiculo/{p}', 'App\Http\Controllers\dashboardController@vehiculoE');
    Route::post('/dashboardfoto', 'App\Http\Controllers\dashboardController@foto');
    Route::get('/dashboardE/{id}', 'App\Http\Controllers\dashboardController@eliminar');
   //ruta vehiculo
    Route::resource('/vehiculo', 'App\Http\Controllers\VehiculoController');
  // Route::get('/vehiculod/{id}', 'App\Http\Controllers\VehiculoController@destroy'); //ruta de eliminar vehiculo inavilitada

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
  
   //ruta verificacion federal2
   Route::resource('/verificacion_f2', 'App\Http\Controllers\verificacion_f2Controller');
   Route::get('/verificacion_f2d/{id}', 'App\Http\Controllers\verificacion_f2Controller@destroy');

   //ruta fisico mecanico
   Route::resource('/fisico_m', 'App\Http\Controllers\fisico_mController');
   Route::get('/fisico_md/{id}', 'App\Http\Controllers\fisico_mController@destroy');

  // ruta empresas
   Route::resource('/empresa', 'App\Http\Controllers\empresaController');
   Route::get('/empresad/{id}', 'App\Http\Controllers\empresaController@destroy');

   // tarjetacController
   Route::resource('/tarjeta', 'App\Http\Controllers\tarjetacController');
   Route::get('/tarjetad/{id}', 'App\Http\Controllers\tarjetacController@destroy');

   // ruta vehiculos nacionales
   Route::resource('/vehiculon', 'App\Http\Controllers\vehiculos_nController');
   Route::get('/vehiculond/{id}', 'App\Http\Controllers\vehiculos_nController@destroy');

   // ruta vehiculos internacional
   Route::resource('/vehiculoi', 'App\Http\Controllers\vehiculos_iController');
   Route::get('/vehiculoid/{id}', 'App\Http\Controllers\vehiculos_iController@destroy');

   // ruta documentos
   Route::resource('/documento', 'App\Http\Controllers\documentos_pController');
   Route::get('/documentod/{id}', 'App\Http\Controllers\documentos_pController@destroy');

   // ruta permisos 
   Route::resource('/permiso', 'App\Http\Controllers\permisosController');
   Route::get('/permisod/{id}', 'App\Http\Controllers\permisosController@destroy');

   

   // ruta propietarios anteriores 
   Route::resource('/propietario', 'App\Http\Controllers\propietarios_aController');
   Route::get('/propietariod/{id}', 'App\Http\Controllers\propietarios_aController@destroy');

   // ruta ficha tecnica
   Route::resource('/ficha_tecnica', 'App\Http\Controllers\ficha_tecnicaController');
   Route::get('/ficha_tecnicad/{id}', 'App\Http\Controllers\ficha_tecnicaController@destroy');

   //ruta de ayuda
   Route::get('/ayuda', function()
  {
     return view("ayuda.index");
  });
     
});

Route::get('/bingo', 'App\Http\Controllers\calendarioController@calendarioT');
Route::get('/prueba', 'App\Http\Controllers\calendarioController@pruebas');