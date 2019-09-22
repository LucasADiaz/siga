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
}
