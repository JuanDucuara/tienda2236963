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

//primera ruta
// clase route -> metodo get metodo para construir rutas que se pueden acceder desde el navegador
Route::get('hola :)', function(){
    
    echo "<h1>hola le dijo la araña a la mosca </h1>";
 });