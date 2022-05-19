<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductoController;
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
Route::get('hola', function(){
    echo "hola 24650903";
 });

 //ruta arreglo
 Route::get('arreglo', function(){
     $estudiantes = [
         "CA" => "carlos",
         "JO"=> "jose",
         "AN"=> "Ana"
     ];
    //recorrer arreglo
    foreach($estudiantes as $e){
        echo $e. "<hr />";
    }     
    //agregar elemento en PHP
    $estudiantes["FA"] = "Fabian";
    var_dump($estudiantes);
});

//arreglo de paises
Route::get('paises', function(){
    $paises = [
        "Colombia"=> [
            "capital"=> "Bogotá",
            "moneda"=> "Peso",
            "poblacion"=>51,
            "ciudades"=>[
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru"=> [
            "capital"=> "Lima",
            "moneda"=> "Sol",
            "poblacion"=>32,
            "ciudades"=>[
                "Arequipa",
                "Trujillo"
            ]
        ],
        "Paraguay"=> [
            "capital"=> "Asunción",
            "moneda"=> "Guarani",
            "poblacion"=>7,
            "ciudades"=>[
                "Asuncion",
                "Luque"
            ]
        ]        
    ];
    //analisar la variable paises
    /*echo "<pre>";
    var_dump($paises);
    echo "</pre>";*/
    //mostrar la vista:
    return view('paises')->with("paises", $paises);
}); 
Route::get('prueba', function(){
    return view('Productos.new');
});

//rutas rest - resource
Route::resource('Productos', 
ProductoController::class );
