<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{
    protected $table = 'autoridades';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['persona_id','user_id'];

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }

    public function telefonos(){    
        return $this->hasMany(Telefono::class); 
    }

    public function legajosTutorDe(){    
        return $this->hasMany(Legajo::class,'tutor_id'); 
    }

    public function profesor(){    
        return $this->hasOne(Profesor::class); 
    }

    public function preceptor(){    
        return $this->hasOne(Preceptor::class); 
    }

    public function administrativo(){    
        return $this->hasOne(Administrativo::class); 
    }

    public function directivo(){    
        return $this->hasOne(Directivo::class); 
    }

    public function user(){    
        return $this->belongsTo(User::class); 
    }
}
