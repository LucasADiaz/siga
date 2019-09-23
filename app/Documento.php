<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    public function legajo(){    
        return $this->belongsTo(Legajo::class); 
    }

    // seguridad de eloquent para la carga masiva
    protected $fillable =['dni_pri','dni_seg','ficha_medica','cost_cuil','libreta','const_alumn_reg','anio']; 
}
