<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    public function index()
    {
        return view('admin.unites.index');
    }
}
