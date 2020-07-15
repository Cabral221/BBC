<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot() 
    {
        parent::boot();
        static::creating(function($filiere) {
            $filiere->slug = Str::slug($filiere->libele);
        });
    }

    public function truncateDescribe($limit, $end='...')
    {
        $with_html_count = strlen($this->describe);
        $without_html_count = strlen(strip_tags($this->describe));
        $html_tags_length = $with_html_count-$without_html_count;

        return Str::limit($this->describe, $limit+$html_tags_length, $end);
    }

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