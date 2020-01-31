<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $fillable = ['name','email','message'];

<<<<<<< HEAD
=======
    public $timestamps = ['read_at'];

    public static function getUnreadMessage()
    {
        return Message::whereNull('read_at')->get();
    }
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
}
