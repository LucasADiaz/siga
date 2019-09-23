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
}
