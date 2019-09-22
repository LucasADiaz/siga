<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaNota extends Model
{
    public function notas(){    
        return $this->hasMany(Nota::class); 
    }

    public function materia(){    
        return $this->belongsTo(Nota::class); 
    }
}
