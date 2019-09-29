<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaProfesor extends Model
{
    protected $table = 'materia_profesor';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['materia_id','profesor_id','caracter'];   
}
