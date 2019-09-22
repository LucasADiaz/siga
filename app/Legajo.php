<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legajo extends Model
{
    protected $table = 'legajos';

    public function alumno(){    
        return $this->belongsTo(Alumno::class); 
    }

    public function padre(){    
        return $this->belongsTo(Autoridad::class); 
    }

    public function madre(){    
        return $this->belongsTo(Autoridad::class); 
    }

    public function tutor(){    
        return $this->belongsTo(Autoridad::class); 
    }
}
