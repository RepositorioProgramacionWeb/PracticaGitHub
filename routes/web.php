<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;
use App\Http\Controllers\paginaControlador;

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

/*Route::get('/', function () {
    return view('welcome');
    
});*/

Route::get('/', [paginaControlador::class,'vista1']);
Route::get('vista2', [paginaControlador::class,'vista2']);

/*Route::get('/PRUEBA2', function () {
    return "PRUEBA MÓDULO 2";
    
});

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "Identificador ". $id . " Creado por " . $nombre;
    
})->where ('nombre','[a-z]+');*/


