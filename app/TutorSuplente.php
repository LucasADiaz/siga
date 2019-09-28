<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorSuplente extends Model
{
    protected $fillable =['nombre','apellido','alumno_id','parentesco']; 
    
    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }

}
