<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Support\Str;
use App\Concerns\AttachableConcern;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use AttachableConcern;

    public $guarded = [];

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

        static::updating(function($filiere) {
            $filiere->slug = Str::slug($filiere->libele);
        });
        
    }



    public static function draft()
    {
        return self::firstOrCreate([
            'program_id' => null,
            'icon'=> null,
            'libele' => null,
            'slug' => null,
            'describe' => '',
            'duration' => '',
            'requirement' => '',
            'outcome' => '',
        ]);
    }

    public function scopeNotDraft($query)
    {
        return $query->whereNotNull('libele');
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