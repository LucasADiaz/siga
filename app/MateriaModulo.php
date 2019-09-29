<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaModulo extends Model
{
    protected $table = 'materia_modulo';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['materia_id','modulo_id'];   
}
