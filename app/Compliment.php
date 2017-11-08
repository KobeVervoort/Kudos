<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compliment extends Model
{
    public function sentBy()
    {
        return $this->belongsTo(User::class, 'sender');
    }

    public function receivedByWhom()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
