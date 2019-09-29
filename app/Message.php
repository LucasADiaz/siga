<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // seguridad de eloquent para la carga masiva
    protected $fillable =['asunto','emisor_id','receptor_id','mensaje','categoria_notificacion_id'];   
    
    public function sender(){
        return $this->belongsTo(User::class, 'emisor_id');
    }

    public function emisor(){
        return $this->belongsTo(User::class);
    }

    public function receptor(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(CategoriaMessage::class,'categoria_notificacion_id');
    }

    public function msj(){
        return $this->belongsTo(Message::class, 'id');
    }

 
}
