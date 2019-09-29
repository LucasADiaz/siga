<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['dia','turno','nombre','hr_entrada','hr_salida','escuela_id'];   

    public function materias(){    
        return $this->belongsToMany(Materia::class); 
    }

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

}
