<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $fillable =['persona_id','profesion','email','lugar_trabajo'];   
}
