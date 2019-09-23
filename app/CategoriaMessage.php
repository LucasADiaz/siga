<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaMessage extends Model
{
    protected $table = 'categoria_messages';

    public function mensaje()
    {
        return $this->hasOne(Message::class,'categoria_notificacion_id');
    }

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
}
