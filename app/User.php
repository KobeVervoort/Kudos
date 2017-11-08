<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function hasSent()
    {
        return $this->hasMany(Compliment::class, 'sender');
    }

    public function hasReceived()
    {
        return $this->hasMany(Compliment::class, 'receiver');
    }
}
