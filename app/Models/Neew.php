<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Carbon\Carbon;
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
use Illuminate\Database\Eloquent\Model;

class Neew extends Model
{
    public $table = 'news';
<<<<<<< HEAD
=======

    public $fillable = ['date','libele','content'];

    public function getDateAttribute($date){
        return  Carbon::parse($date)->format('Y-m-d\TH:i');
    }
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
}
