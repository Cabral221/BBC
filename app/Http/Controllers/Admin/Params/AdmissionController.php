<?php

namespace App\Http\Controllers\Admin\Params;

use App\Models\Admission;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        $admission = Admission::All();
        return view('admin.admissions.index',compact('admission'));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function store()
    {
        
    }

    public function destroy($id)
    {
        $delete_ad = Admission::find($id);
        if($delete_ad)
        $delete_ad->delete();
        Flashy::success('Your admission has been successfully deleted');
        return redirect()->back();
    }
}
