<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Neew extends Model
{
    public $table = 'news';
    public $fillable = ['date','libele','content'];

    public function getDateAttribute($date){
        return  Carbon::parse($date)->format('Y-m-d\TH:i');
    }
}
