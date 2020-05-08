<?php

namespace App\Helpers;

use App\Models\Message;


class MessageHelper {


    public static function UnreadMessage()
    {
        $unread = Message::where('read_at',null)->count();
        if ($unread > 0) {
            return $unread;
        }
        return false;
    }

}