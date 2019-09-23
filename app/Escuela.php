<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    public function alumnos(){    
        return $this->hasMany(Alumno::class); 
    }

    public function categoriasMensajes(){    
        return $this->hasMany(CategoriaMessage::class); 
    }

    public function cursos(){    
        return $this->hasMany(Curso::class); 
    }

    public function periodos(){    
        return $this->hasMany(Periodo::class); 
    }

    public function modulos(){    
        return $this->hasMany(Modulo::class); 
    }

    public function modalidades(){    
        return $this->hasMany(Modalidad::class); 
    }

    public function domicilio(){    
        return $this->belongsTo(Domicilio::class); 
    }
    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre','telefono'];   
}
