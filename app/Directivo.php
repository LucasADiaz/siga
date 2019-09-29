<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directivo extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['autoridad_id']; 

    public function autoridad(){    
        return $this->belongsTo(Autoridad::class); 
    }
}
