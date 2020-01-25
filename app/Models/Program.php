<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Diplome;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }

    public function niveaux()
    {
        return $this->hasMany(Niveau::class);
    }

    public function diplomes()
    {
        return $this->hasMany(Diplome::class);
    }
}
