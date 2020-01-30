<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }

    public function specialites()
    {
        return $this->hasMany(Specialite::class);
    }
}