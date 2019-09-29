<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaActividadCurso extends Model
{
    protected $table = 'dia_actividad_cursos';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['fecha','curso_id']; 

    public function curso(){    
        return $this->belongsTo(Curso::class); 
    }

    
}
