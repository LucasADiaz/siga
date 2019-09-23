<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaActividadCurso extends Model
{
    protected $table = 'dia_actividad_cursos';

    public function curso(){    
        return $this->belongsTo(Curso::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['fecha']; 
}
