<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    //protected $table="misArticulos";

	//protected $primaryKey="articulo_id";

	protected $fillable=[

		"nombre_articulo",
		"precio",
		"PAIS_DE_ORIGEN",
		"observaciones",
		"seccion"

	];
}
