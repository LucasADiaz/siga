<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $fillable =['persona_id','alumno_id','parentesco'];   
}
