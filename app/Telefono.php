<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }


    // seguridad de eloquent para la carga masiva
    protected $fillable =['persona_id','numero','categoria'];   
}
