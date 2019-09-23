<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }

    public function materia(){    
        return $this->belongsTo(Materia::class); 
    }

    public function periodo(){    
        return $this->belongsTo(Periodo::class); 
    }

    public function categoria(){    
        return $this->belongsTo(CategoriaNota::class,'categoria_nota_id'); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nota'];   
}