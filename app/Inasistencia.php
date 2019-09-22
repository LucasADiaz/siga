<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inasistencia extends Model
{
    protected $table = 'inasistencias';

    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }
}
