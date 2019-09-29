<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inasistencia extends Model
{
    protected $table = 'inasistencias';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['alumno_id','fecha'];  

    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }
     
}
