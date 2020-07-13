<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Neew extends Model
{
    public $table = 'news';
    public $fillable = ['date','libele','content'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getDateAttribute($date){
        return  Carbon::parse($date)->format('d/m/yy');
    }
}
