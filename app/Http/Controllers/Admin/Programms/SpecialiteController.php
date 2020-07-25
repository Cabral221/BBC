<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Program;
use App\Models\Specialite;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SpecialiteController extends Controller
{
    public function index()
    {
        $af = Specialite::all();
        return view('admin.programms.specialites.index',compact('af'));
    }

    public function create()
    {
        
    }

    public function edit($id)
    {
        $edit = Specialite::find($id);
        $programms = Program::All();
        return view('admin.programms.specialites.edit',compact(['edit','programms']));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'specialite' => 'required',
            'title' => 'required|min:2'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $update = Specialite::find($id);
        $update->libele = $request->input('title');
        $update->filiere_id = $request->input('specialite');
        $update->save();
        Flashy::success('Your specialty has been successfully changed');
        return redirect()->route('admin.programms.specialites.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'specialite' => 'required',
            'title' => 'required|min:2'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
            $spec = new Specialite();
            $spec->libele = $request->input('title');
            $spec->filiere_id = $request->input('specialite');
            $spec->save();
            Flashy::success('Your specialty has been successfully added');
            return redirect()->back();

    }

    public function destroy($id)
    {
        $delet = Specialite::find($id);
        if($delet);
        $delet->delete();
        Flashy::success('Your specialty has been successfully deleted');
        return redirect()->back();
    }
}
