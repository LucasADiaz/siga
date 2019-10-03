<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function notas(){    
        return $this->hasMany(Nota::class); 
    }

    public function categoriaNota(){    
        return $this->hasMany(CategoriaNota::class); 
    }

    public function cursos(){    
        return $this->belongsToMany(Curso::class); 
    }

    public function modulos(){    
        return $this->belongsToMany(Modulo::class); 
    }

    public function profesores(){    
        return $this->belongsToMany(Profesor::class)->withPivot('caracter'); 
    }
    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre'];   
}
