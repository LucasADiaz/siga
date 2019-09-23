<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    
    public function alumno(){    
        return $this->hasOne(Alumno::class); 
    }

    public function autoridad(){    
        return $this->hasOne(Autoridad::class); 
    }

    public function domicilio(){    
        return $this->belongsTo(Domicilio::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre','apellido','fecha_nacimiento','sexo'];   
}