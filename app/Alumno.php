<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['persona_id','curso_id','escuela_procedencia','grupo_factor'];   

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function curso(){    
        return $this->belongsTo(Curso::class); 
    }

    public function inasistencias(){    
        return $this->hasMany(Inasistencia::class); 
    }

    public function notas(){    
        return $this->hasMany(Nota::class); 
    }
    
    public function tutor_suplentes(){    
        return $this->hasMany(TutorSuplente::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    public function legajo(){    
        return $this->hasOne(Legajo::class); 
    }

    public function parentescos(){    
        return $this->belongsToMany(Persona::class,'parentescos')->withPivot('parentesco'); 
    }

}
