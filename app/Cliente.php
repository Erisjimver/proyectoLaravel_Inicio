<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    /*
    	protected $fillable=[

		"nombre",
		"apellidos"
	];
*/
	//protected $table="clientes";
	//protected $primaryKey="id";+
	public function articulo(){
		return $this->hasOne("App\Articulo");
	}
}
