<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['escuela_id','nombre','fecha_inicio','fecha_fin'];   

    public function Nota(){    
        return $this->hasMany(Nota::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

}