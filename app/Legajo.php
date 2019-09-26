<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legajo extends Model
{
    protected $guarded = [];
    protected $table = 'legajos';

    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }

    public function padre(){    
        return $this->belongsTo(Autoridad::class); 
    }

    public function madre(){    
        return $this->belongsTo(Autoridad::class); 
    }

    public function tutor(){    
        return $this->belongsTo(Autoridad::class); 
    }

    public function documentos(){    
        return $this->hasMany(Documento::class); 
    }
     // seguridad de eloquent para la carga masiva
     protected $fillable =['alumno_id','madre_id','padre_id','tutor_id'];   

}
