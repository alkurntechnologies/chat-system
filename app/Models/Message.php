<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['from_user','to_user','content'];

    public function fromUser()
    {
        return $this->hasOne(User::class,'id','from_user');
    }

    public function toUser()
    {
        return $this->hasOne(User::class,'id','to_user');
    }
}
