<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
