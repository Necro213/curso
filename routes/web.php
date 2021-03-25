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

Route::get("/calificaciones",[
    "uses"=>"CalificacionesController@calificacionesView",
    "as" => "calificaciones"
]);

Route::get("/calificaciones/get",[
    "uses"=>"CalificacionesController@getCalificaciones",
    "as" => "calificaciones"
]);


Route::post("/calificaciones/registrar",[
    "uses"=>"CalificacionesController@registrarCalificacion",
    "as" => "calificacion.reg"
]);
