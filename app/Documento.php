<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    public function legajo(){    
        return $this->belongsTo(Legajo::class); 
    }
}
