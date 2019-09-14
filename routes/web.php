<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});


*/
Route::get("/","MiControlador@index");
Route::get("/crear","MiControlador@create");
Route::get("/articulos","MiControlador@store");
Route::get("/mostrar","MiControlador@show");
Route::get("/contacto","MiControlador@contactar");
Route::get("/galeria","MiControlador@galeria");

Route::get("/insertar",function(){

//DB::insert("insert into articulos(nombre_articulo,precio,pais_de_origen_seccion,observaciones) values(?,?,?,?,?)",["jarron","15.2","japon","ceramica","ganga"]);

});

Route::get("/insertar", function(){
 DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_DE_ORIGEN, SECCION, OBSERVACIONES) VALUES(?,?,?,?,?)",["JARRON",15.2,"JAPON","CERAMICA","GANGA"]);
});

Route::get('/leer', function(){
    $resultados=DB::select("SELECT * FROM  articulos WHERE id=?", [2]);
	//$resultados=DB::update("select nombre_articulo from articulos where id=1");
    foreach($resultados as $articulos){
    	return $articulos->nombre_articulo;
    }
});

Route::get('/actualizar', function(){
    DB::update("update articulos set seccion='Decoracion' WHERE ID=?", [2]);
});

Route::get('/borrar', function(){
    DB::delete("DELETE FROM articulos WHERE ID=?", [1]);
});