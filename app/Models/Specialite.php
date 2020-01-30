<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function unites()
    {
        return $this->hasMany(Unite::class);
    }
}
