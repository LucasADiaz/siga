<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['type','notifiable','data','read_at'];  

}
