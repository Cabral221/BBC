<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

}
