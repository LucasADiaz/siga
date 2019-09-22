<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function inasistencias(){    
        return $this->hasMany(Inasistencia::class); 
    }

    public function notas(){    
        return $this->hasMany(Nota::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    public function legajo(){    
        return $this->hasOne(Legajo::class); 
    }
}
