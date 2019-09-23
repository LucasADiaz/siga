<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = 'modalidades';

    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre'];   
}