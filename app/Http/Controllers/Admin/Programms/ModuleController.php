<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Module;
use App\Models\Niveau;
use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index()
    {
        $modul = Module::All();
        $fil = Filiere::All();
        $niv = Niveau::All();
        return view('admin.programms.modules.index',compact(['modul','fil','niv']));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {
        $edite_module = Module::findOrFail($request->module);
        $edite_module->libele = $request->input('libele');
        $edite_module->filiere_id = $request->input('filiere_id');
        $edite_module->niveau_id = $request->input('niveau_id');
        $edite_module->save();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $module = new Module();
        $module->filiere_id = $request->input('filiere_id');
        $module->niveau_id = $request->input('niveau_id');
        $module->libele = $request->input('libele');
        $module->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $delete_module = Module::find($id);
        if($delete_module)
        $delete_module->delete();
        return redirect()->back();
    }
}
