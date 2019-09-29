<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';

    public function materias(){    
        return $this->belongsToMany(Materia::class)->withPivot('caracter'); 
    }

    public function cursos(){    
        return $this->belongsToMany(Curso::class); 
    }

    public function autoridad(){    
        return $this->belongsTo(Autoridad::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['titulo'];   
}
