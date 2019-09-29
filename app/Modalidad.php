<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = 'modalidades';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['escuela_id','nombre'];  
    
    public function escuela(){    
        return $this->belongsTo(Escuela::class); 
    }
 
}