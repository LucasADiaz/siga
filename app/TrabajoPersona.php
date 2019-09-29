<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoPersona extends Model
{
    protected $fillable =['persona_id','domicilio_trabajo_id','lugar_trabajo'];   

    public function domicilio(){    
        return $this->belongsTo(Domicilio::class); 
    }

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }
}
