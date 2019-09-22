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

    public function LegajosPadreDe(){    
        return $this->hasMany(Legajo::class,'padre_id'); 
    }

    public function LegajosMadreDe(){    
        return $this->hasMany(Legajo::class,'madre_id'); 
    }

    public function user(){    
        return $this->hasOne(User::class); 
    }
}
