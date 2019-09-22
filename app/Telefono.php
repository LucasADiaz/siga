<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    public function autoridad(){    
        return $this->belongsTo(Autoridad::class); 
    }
}
