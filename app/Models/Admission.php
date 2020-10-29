<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Diplome;
use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{

    public $guarded = [];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function diplome()
    {
        return $this->belongsTo(Diplome::class);
    }

}
