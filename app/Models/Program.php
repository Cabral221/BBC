<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Diplome;
use App\Models\Filiere;
use App\Models\Admission;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot() 
    {
        parent::boot();
        static::creating(function ($program) {
            $program->slug = Str::slug($program->libele);
        });
    }
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

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }
}
