<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = ['id'];
    
    public function sender()
    {
        return $this->belongsTo(User::class, 'emisor_id');
    }

    public function fecha()
    {
        return $this->belongsTo(Message::class, 'id');
    }
}
