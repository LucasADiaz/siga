<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
        // seguridad de eloquent para la carga masiva
        protected $fillable =['calle','numero','barrio','cod_postal','localidad','piso','departamento'];   

    public function persona(){    
        return $this->hasOne(Persona::class); 
    }

    public function escuela(){    
        return $this->hasOne(Escuela::class); 
    }

    public function laboral(){    
        return $this->hasOne(TrabajoPersona::class); 
    }
}