<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{
    protected $table = 'autoridades';

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function telefonos(){    
        return $this->hasMany(Telefono::class); 
    }

    public function legajosTutorDe(){    
        return $this->hasMany(Legajo::class,'tutor_id'); 
    }

    public function lgajosPadreDe(){    
        return $this->hasMany(Legajo::class,'padre_id'); 
    }

    public function legajosMadreDe(){    
        return $this->hasMany(Legajo::class,'madre_id'); 
    }

    public function profesores(){    
        return $this->hasMany(Profesor::class); 
    }

    public function user(){    
        return $this->belongsTo(User::class); 
    }
   // seguridad de eloquent para la carga masiva
    protected $fillable =['email'];
}
