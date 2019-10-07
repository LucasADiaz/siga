<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['persona_id','numero','categoria'];   

    public function persona(){    
        return $this->belongsTo(Persona::class); 
    }
   
}
