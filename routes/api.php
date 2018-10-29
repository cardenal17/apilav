<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::middleware('auth:api')->get('/', function (Request $request) {
	Route::post('soldaduras','Pellizary\SoldaduraController@store')->name('agregarsoldaduras');




});
//ruta para identificar si el front tiene conexion con la api
Route::get('/test', function (){
    return response()->json([
        "conexion"=> 1
    ], 200);
});

//crearcion de un gropo de rutas para el roll de store 
//Route::middleware(['auth'])->group(function(){
	
	//Roles
	
	//crear roles
	Route::post('roles/store','Configuracion\RoleController@store')->name('roles.store');
	//->middleware('Permission:roles.create');//el midelware buscara en el archivo kernel.php 
	//si exite permission y la ejecutara 

   //listar roles
   Route::get('roles','Configuracion\RoleController@index')->name('roles.index');
	//->middleware('Permission:roles.index');

   //ver el formulario de creacion
	Route::get('roles/create','Configuracion\RoleController@create')->name('roles.create');
	//->middleware('Permission:roles.create');
    
   //actualizar los roles 
	Route::put('roles/{role}','Configuracion\RoleController@update')->name('roles.update');
	//->middleware('Permission:roles.edit');

  //ver detalle de los roles 
	Route::get('roles/{role}','Configuracion\RoleController@show')->name('roles.show');
	//->middleware('Permission:roles.show');
  
  //eliminar roles registrados 
	Route::delete('roles/{role}','Configuracion\RoleController@destroy')->name('roles.destroy');
	//->middleware('Permission:roles.destroy');

  // ver formulario de edicion 
	Route::get('role/{role}/edit','RoleController@edit')->name('roles.edit');
	//->middleware('permission::roles.edit');

//});

// rutas de inspeccion de soldadura 
Route::get('soldaduras','Pellizary\SoldaduraController@getsol')->name('consultasoldaduras');
	//->middleware('permision:soldaduras.show');

Route::get('soldaduras/{id}','Pellizary\SoldaduraController@edit')->name('consultasoldadurasid');
Route::put('soldaduras/{id}','Pellizary\SoldaduraController@update')->name('atualizacionsoldaduras');
Route::delete('soldaduras/{id}','Pellizary\SoldaduraController@borrar')->name('borrarsoldadura');

//rutas de inspeccion de ensamblaje

Route::get('ensamblajes','Pellizary\EnsamblajeController@getsol')->name('consultaensamblaje');
Route::post('ensamblajes','Pellizary\EnsamblajeController@store')->name('agregarensamblaje');
Route::get('ensamblajes/{id}','Pellizary\EnsamblajeController@edit')->name('consultaensamblajeid');
Route::put('ensamblajes/{id}','Pellizary\EnsamblajeController@update')->name('atualizacionensamblaje');
Route::delete('ensamblajes/{id}','Pellizary\EnsamblajeController@borrar')->name('borrarensamblaje');

//rutas de inspeccion de perforado
Route::get('perforados','Pellizary\PerforadoController@getsol')->name('consultaperforado');
Route::post('perforados','Pellizary\PerforadoController@store')->name('agregarperforado');
Route::get('perforados/{id}','Pellizary\PerforadoController@edit')->name('consultaperforadoid');
Route::put('perforados/{id}','Pellizary\PerforadoController@update')->name('atualizacionperforado');
Route::delete('perforados/{id}','Pellizary\PerforadoController@borrar')->name('borrarperforado');


// rutas de detalle de inspeccion de soldadura
Route::get('his_sols/{id}','Pellizary\His_solController@show')->name('ver_inspeccion_soldadura');
Route::post('his_sols','Pellizary\His_solController@store')->name('agregar_nueva_inspeccion');
Route::get('his_sols','Pellizary\His_solController@edit')->name('precargar_inspeccion');
Route::put('his_sols/{id}','Pellizary\His_solController@update')->name('actualizar_inspeccion');
Route::delete('his_sols/{id}','Pellizary\His_solController@destroy')->name('eliminar_inspeccion');

// rutas de detalle de inspeccion de ensamblaje
Route::get('his_ens/{id}','Pellizary\His_enController@show')->name('ver_inspeccion_ensamblaje');
Route::post('his_ens','Pellizary\His_enController@store')->name('agregar_nueva_inspeccion');
Route::get('his_ens','Pellizary\His_enController@edit')->name('precargar_inspeccion');
Route::put('his_ens/{id}','Pellizary\His_enController@update')->name('actualizar_inspeccion');
Route::delete('his_ens/{id}','Pellizary\His_enController@destroy')->name('eliminar_inspeccion');

// rutas de detalle de inspeccion de perforado
Route::get('his_pers/{id}','Pellizary\His_perController@show')->name('ver_inspeccion_perforado');
Route::post('his_pers','Pellizary\His_perController@store')->name('agregar_nueva_inspeccion');
Route::get('his_pers','Pellizary\His_perController@edit')->name('precargar_inspeccion');
Route::put('his_pers/{id}','Pellizary\His_perController@update')->name('actualizar_inspeccion');
Route::delete('his_pers/{id}','Pellizary\His_perController@destroy')->name('eliminar_inspeccion');


// rutas para edicion de usuarios con roll

Route::get('users','Pellizary\UserController@index')->name('consultaususarios');
Route::post('users','Pellizary\UserController@store')->name('agregarusuarios');
Route::get('users/{id}','Pellizary\UserController@edit')->name('consultausuariosid');
Route::put('users/{id}','Pellizary\UserController@update')->name('atualizacionusuarios');
Route::delete('users/{id}','Pellizary\UserController@borrar')->name('borrarusuarios');