<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preceptor extends Model
{
    protected $table = 'preceptores';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['autoridad_id'];   

    public function cursos(){    
        return $this->hasMany(Curso::class); 
    }

    public function autoridad(){    
        return $this->belongsTo(Preceptor::class); 
    }
}
