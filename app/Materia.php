<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function notas(){    
        return $this->hasMany(Nota::class); 
    }

    public function categoriaNota(){    
        return $this->hasOne(CategoriaNota::class); 
    }

    public function curso(){    
        return $this->belongsTo(Curso::class); 
    }

    public function modulo(){    
        return $this->hasMany(Modulo::class); 
    }
}
