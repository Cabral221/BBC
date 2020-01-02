<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
