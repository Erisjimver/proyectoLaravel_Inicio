<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    //protected $table="misArticulos";

	//protected $primaryKey="articulo_id";

	protected $fillable=[

		"nombre_articulo".
		"pecio",
		"pais_de_origen",
		"observaciones",
		"precio"

	];
}
