<?php

namespace App\notifications;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }
}
