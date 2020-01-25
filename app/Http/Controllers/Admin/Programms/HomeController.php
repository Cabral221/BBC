<?php

namespace App\Http\Controllers\Admin\Programms;
use\App\Models\Program;
use App\Models\Niveau;
use App\Models\Diplome;
use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $programms = Program::All();
        $fil = Filiere::All();
        $diplome = Diplome::All();
        $niv = Niveau::All();
        // foreach($niv as $nivo){
        //     dd($nivo->program->id);
        // }

        return view('admin.programms.programms.index',compact(['programms','fil','niv','diplome']));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {
        $edite_prog = Program::findOrFail($request->prog);
        $edite_prog->libele = $request->input('libele');
        $edite_prog->save();
        return back();
    }

    public function store(Request $request)
    {
      $prog = new Program();
      $prog->libele = $request->input('libele');
      $prog->save();
      return redirect()->back();

        
    }

  
    public function destroy($id)
    {
        $delete_prog = Program::find($id);
        if($delete_prog)
        $delete_prog->delete();
        return redirect()->back();
    }
}
