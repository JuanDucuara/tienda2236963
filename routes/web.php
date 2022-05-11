<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

 Route::get('paises' , function(){
});
    
Route::get('paises' , function(){
        $paises = [
        "Colombia"  => [
         "capital" => "Bogota",
         "moneda" => "peso",
         "poblacion" => "51.6",
         "ciudades" => [
             "Medellin",
             "Cali",
             "Barranquilla"
            ]
        
        ],

        "Ecuador" => [
            "capital" => "Quito",
            "moneda" => "Dolar",
            "poblacion" => "30",
            "ciudades" => [
                "Guayaquil",
                "Cuenca"
               ]
     
        ],
        
        "Francia"  => [
            "capital" => "Paris",
            "moneda" => "Euro",
            "poblacion" => "67.3",
            "ciudades" => [
                "Marsella",
                "Lyon",
                "Paris",
                "Niza"
              
            ]
     
        ],

        "Canada"  => [
            "capital" => "Ottawwa",
            "moneda" => "Dolar canadiense",
            "poblacion" => "38.1",
            "ciudades" => [
                "Torontol",
                "Montreal",
                "Vancuver"
               ]
     
        ],
        
        "China"  => [
            "capital" => "Beigin",
            "moneda" => "Reminbi",
            "poblacion" => "1.401",
            "ciudades" => [
                "Shangai",
                "Pekin",
                "Wuhan",
                "Canton",
                "Shenzhen"
            ]
     
        ],

        "Estados Unidos"  => [
            "capital" => "Washington D.C",
            "moneda" => "Dolar",
            "poblacion" => "329.5",
            "ciudades" => [
                "Los Angeles",
                "Chicago",
                "New York",
                "San Francisco",
                "Boston"
               ]
     
        ]

    ];

    return view('paises')
       ->with('paises' , $paises);

 });

 Route::get('prueba' , function(){
      return view('productos.create');
 });

/**
 * Rutas REST Producto
 * 
 */
Route::resource('productos', ProductoController::class);