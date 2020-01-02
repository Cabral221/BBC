<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }
}
