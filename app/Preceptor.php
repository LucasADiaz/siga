<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preceptor extends Model
{
    protected $table = 'preceptores';

    public function cursos(){    
        return $this->hasMany(Curso::class); 
    }
}
