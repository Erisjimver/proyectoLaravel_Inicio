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
	public function articulo(){//consulta relaciones uno a uno
		return $this->hasOne("App\Articulo");
	}

	public function articulos(){//consulta relaciones unos a muchos
		return $this->hasMany("App\Articulo");
	}

	public function perfils(){
		return $this->belongsToMany("App\Perfil");
	}
}
