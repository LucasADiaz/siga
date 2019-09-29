<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['legajo_id','url','anio']; 

    public function legajo(){    
        return $this->belongsTo(Legajo::class); 
    }

}
