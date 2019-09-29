<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['nivel','anio','seccion','turno','escuela_id','preceptor_id'];   

    public function materias(){    
        return $this->belongsToMany(Materia::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    public function preceptor(){    
        return $this->belongsTo(Preceptor::class); 
    }

    public function diasActividad(){    
        return $this->hasMany(DiaActividadCurso::class); 
    }

    public function alumnos(){    
        return $this->hasMany(Alumno::class); 
    }
}
