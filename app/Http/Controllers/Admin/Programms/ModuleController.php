<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Module;
use App\Models\Niveau;
use App\Models\Filiere;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ModuleController extends Controller
{
    public function index()
    {
        $modul = Module::All();
        $fil = Filiere::All();
        $niv = Niveau::All();
        return view('admin.programms.modules.index',compact(['modul','fil','niv']));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'filiere_id' => 'required',
            'niveau_id' => 'required',
            'libele' => 'required|min:2'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $edite_module = Module::findOrFail($request->module);
        $edite_module->libele = $request->input('libele');
        $edite_module->filiere_id = $request->input('filiere_id');
        $edite_module->niveau_id = $request->input('niveau_id');
        $edite_module->save();
        Flashy::success('Your module has been successfully changed');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'specialite' => 'required',
            'niveau_id' => 'required',
            'libele' => 'required|min:2'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back()->withInput();
        }
        $module = new Module();
        $module->filiere_id = $request->input('specialite');
        $module->niveau_id = $request->input('niveau_id');
        $module->libele = $request->input('libele');
        $module->save();
        Flashy::success('Your module has been successfully added');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $delete_module = Module::find($id);
        if($delete_module)
        $delete_module->delete();
        Flashy::success('Your module has been successfully deleted');
        return redirect()->back();
    }
}
