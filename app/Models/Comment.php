<?php

namespace App\Models;

use App\User;
use App\Models\Post;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
