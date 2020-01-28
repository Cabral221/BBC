<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }
}
