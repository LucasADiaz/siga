<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    public function persona(){    
        return $this->hasOne(Persona::class); 
    }
}
