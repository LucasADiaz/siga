<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre','apellido','fecha_nacimiento','lugar_nacimiento','sexo','nro_doc','tipo_nro_doc','profesion','email','nacionalidad','domicilio_id'];   
    
    public function alumno(){    
        return $this->hasOne(Alumno::class); 
    }

    public function autoridad(){    
        return $this->hasOne(Autoridad::class); 
    }

    public function legajosPadreDe(){    
        return $this->hasMany(Legajo::class,'padre_id'); 
    }

    public function legajosMadreDe(){    
        return $this->hasMany(Legajo::class,'madre_id'); 
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
    
    public function scopeDni($query, $dni){
       
        $query->where('nro_doc', $dni);
    }


}