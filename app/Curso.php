<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function materias(){    
        return $this->belongsToMany(Materia::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    public function diasActividad(){    
        return $this->hasMany(DiaActividadCurso::class); 
    }

    public function alumnos(){    
        return $this->hasMany(Alumno::class); 
    }
    // seguridad de eloquent para la carga masiva
    protected $fillable =['nivel','anio','seccion','turno'];   
}
