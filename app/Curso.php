<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function materias(){    
        return $this->hasMany(Materia::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    public function diasActividad(){    
        return $this->hasMany(DiaActividadCurso::class); 
    }
}
