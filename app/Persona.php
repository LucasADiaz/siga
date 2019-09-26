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

    public function telefonos(){    
        return $this->hasMany(Telefono::class); 
    }

    public function domicilio(){    
        return $this->belongsTo(Domicilio::class); 
    }

    public function parentescos(){    
        return $this->belongsToMany(Alumno::class,'parentescos')->withPivot('parentesco'); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre','apellido','fecha_nacimiento','lugar_nacimiento','sexo','nro_doc','nacionalidad','domicilio_id'];   
}