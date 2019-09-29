<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostCreated;

class Post extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['titulo','contenido'];   

    protected $events = [
        'created' => PostCreated::class
    ];

}
