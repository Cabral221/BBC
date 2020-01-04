<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function programs()
    {
        return 'programs';
    }
    public function library()
    {
        return 'library';
    }
    public function contact()
    {
        return 'contact';
    }
    public function member()
    {
        return 'member';
    }
}
