<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaMessage extends Model
{
    protected $table = 'categoria_messages';

    // seguridad de eloquent para la carga masiva
    protected $fillable =['escuela_id','nombre','whatsapp','email','aplicacion'];

    public function mensaje()
    {
        return $this->hasOne(Message::class,'categoria_notificacion_id');
    }

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
}
