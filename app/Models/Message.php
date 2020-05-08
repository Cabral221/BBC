<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $fillable = ['name','email','message'];

    public $timestamps = ['read_at'];

    public static function getUnreadMessage()
    {
        return Message::whereNull('read_at')->orderBy('created_at','desc')->get();
    }
}
