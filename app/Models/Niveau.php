<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
