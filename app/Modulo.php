<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function materias(){    
        return $this->belongsToMany(Materia::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['dia','turno','nombre','turno'];   
}
