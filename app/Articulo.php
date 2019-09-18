<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //
    //protected $table="misArticulos";

	//protected $primaryKey="articulo_id";
/*
	protected $fillable=[

		"nombre_articulo",
		"precio",
		"PAIS_DE_ORIGEN",
		"observaciones",
		"seccion"

	];

*/	

	    use SoftDeletes;

    	protected $dates=["deleted_at"];

    	public function cliente(){
    		return $this->belongsTo("App\Cliente");
    	}
}
