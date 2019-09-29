<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $fillable =['persona_id','alumno_id','parentesco'];   

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }
}
