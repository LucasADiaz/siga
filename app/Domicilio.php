<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $guarded = [];
    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function escuela(){    
        return $this->hasOne(Escuela::class); 
    }
    // seguridad de eloquent para la carga masiva
    protected $fillable =['calle','numero','cod_postal','localidad','referencias','piso','departamento'];   
}