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
        $admission = Admission::Where('etat',0)->orderBy('created_at','desc')->paginate(10);
        $admins = Admission::Where('etat',1)->orderBy('updated_at','desc')->paginate(10);
        return view('admin.admissions.index',compact(['admission','admins']));
    }

    public function show(Request $request , $id)
    {
        $view = Admission::find($id);
        $view->etat = 1;
        $view->save();
        return view('admin.admissions.create',compact('view'));
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
