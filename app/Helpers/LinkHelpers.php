<?php

namespace App\Helpers;

use App\Models\Link;

class LinkHelpers {

    public static function getLink()
    {
        return Link::all();
    }

}
