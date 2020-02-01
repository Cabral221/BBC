<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   public function getDateOutAttribute($value) 
   {
       return Carbon::parse($value)->format('Y-m-d  ');
   }
}
