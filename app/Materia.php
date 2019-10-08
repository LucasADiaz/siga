<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    // seguridad de eloquent para la carga masiva
    protected $fillable =['nombre'];  

    //Accesor - Se modifica el valor para que se muestre correctamente el valor
    public function getNombreAttribute($value)
    {
        $value = mb_convert_case($value, MB_CASE_LOWER, "UTF-8");
        return ucwords($value);
    }

    //Mutadores - Se modifica el valor para que se guarde correctamente el valor en la DB
    public function setNombreAttribute($value)
    {
        $value = mb_convert_case($value, MB_CASE_UPPER, "UTF-8");
        $this->attributes['nombre'] = $value;
    }
    
    public function notas(){    
        return $this->hasMany(Nota::class); 
    }

    public function categoriaNota(){    
        return $this->hasOne(CategoriaNota::class); 
    }

    public function cursos(){    
        return $this->belongsToMany(Curso::class); 
    }

    public function modulos(){    
        return $this->belongsToMany(Modulo::class); 
    }

    public function profesores(){    
        return $this->belongsToMany(Profesor::class)->withPivot('caracter'); 
    }
 
}
