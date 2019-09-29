<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['autoridad_id','titulo'];   

    public function materias(){    
        return $this->belongsToMany(Materia::class)->withPivot('caracter'); 
    }

    public function autoridad(){    
        return $this->belongsTo(Autoridad::class); 
    }

}
