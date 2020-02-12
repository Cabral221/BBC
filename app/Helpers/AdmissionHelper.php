<?php

namespace App\Helpers;

use App\Models\Admission;


class AdmissionHelper {


    public static function UnreadAdmission()
    {
        $unread = Admission::where('etat',0)->count();
        if ($unread > 0) {
            return $unread;
        }
        return false;
    }

}