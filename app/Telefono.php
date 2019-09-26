<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    public function autoridad(){    
        return $this->belongsTo(Autoridad::class); 
    }


    // seguridad de eloquent para la carga masiva
    protected $fillable =['persona_id','numero','categoria'];   
}
