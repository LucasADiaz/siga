<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function Nota(){    
        return $this->hasMany(Nota::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre'];   
}