<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoMateria extends Model
{
    protected $table = 'curso_materia';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['materia_id','curso_id'];   

}
