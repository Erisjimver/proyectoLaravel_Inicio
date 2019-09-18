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
/*
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

*/


use App\Articulo;//se debe colocar para importar el metodo All del modelo Articulo y evitar colcoar App/Articulo


//consulta normal select *
Route::get('/leer', function(){

$articulos=Articulo::all();

	//$articulos=App\Articulo::all();

   // $resultados=DB::select("SELECT * FROM  articulos WHERE id=?", [2]);
	//$resultados=DB::update("select nombre_articulo from articulos where id=1");
    foreach($articulos as $articulo){
    	echo "Nombre:" . $articulo->nombre_articulo . " Precio: " . $articulo->precio . "<br>";
    }
});



//consulta adicionales constraints
Route::get('/leer2', function(){
//
$articulos=Articulo::where("PAIS_DE_ORIGEN","JAPON")->get();
//$articulos=Articulo::where("PAIS_DE_ORIGEN","JAPON")->min("precio");//buscar al articulo con el precio mas bajo

//$articulos=Articulo::where("PAIS_DE_ORIGEN","JAPON")->orderby("nombre_articulo","desc")->get();//ordenando 
	return $articulos;
	//$articulos=App\Articulo::all();


   /* foreach($articulos as $articulo){
    	echo "Nombre:" . $articulo->nombre_articulo . " Precio: " . $articulo->precio . "<br>";
    }
    */
});

//insertar eloquent
Route::get('/insertar', function(){
//
$articulos= new Articulo;

$articulos->nombre_articulo="Pantalones";

$articulos->precio=60;
$articulos->PAIS_DE_ORIGEN="España";
$articulos->observaciones="Lavados a la piedra";
$articulos->seccion="Confecccion";
$articulos->save();


	return $articulos;

});


//actualizar eloquent
Route::get('/actualizar2', function(){
//
$articulos=Articulo::find(3);

$articulos->nombre_articulo="Pantalones";

$articulos->precio=90;
$articulos->PAIS_DE_ORIGEN="España";
$articulos->observaciones="Lavados a la piedra";
$articulos->seccion="Confecccion";
$articulos->save();


	return $articulos;

});



//actualizar eloquent
Route::get('/actualizar3', function(){
//
Articulo::where("seccion","ceramica")->where("PAIS_DE_ORIGEN","españa")->update(["seccion"=>"Mensaje"]);

Articulo::where("seccion","ceramica")->where("PAIS_DE_ORIGEN","españa")->update(["precio"=>90]);


});



//actualizar elimina con  id
Route::get('/borrar', function(){
//
	$articulo=Articulo::find(2);
	$articulo->delete();

});


//eliminnar con condicion where
Route::get('/borrar2', function(){
//
	Articulo::where("seccion","ferreteria")->delete();

});


//insertar varios
Route::get('/insertar3', function(){
//
	Articulo::create(["nombre_articulo"=>"Impresora","precio"=>50,"PAIS_DE_ORIGEN"=>"Colombia","observaciones"=>"Nada que decir","seccion"=>"Informatica");

});