<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function Nota(){    
        return $this->hasMany(Nota::class); 
    }
}
