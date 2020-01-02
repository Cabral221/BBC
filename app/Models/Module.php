<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
