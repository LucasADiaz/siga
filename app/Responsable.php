<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $fillable =['persona_id','domicilio_trabajo_id','lugar_trabajo'];   
}
