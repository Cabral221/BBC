<?php

namespace App\Http\Controllers\Admin\Programms;
use\App\Models\Program;
use App\Models\Niveau;
use App\Models\Diplome;
use App\Models\Filiere;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $programms = Program::All();
        $fil = Filiere::notDraft()->get();
        $diplome = Diplome::All();
        $niv = Niveau::All();

        $newfil = Filiere::draft();

        return view('admin.programms.programms.index',compact(['programms','fil', 'newfil','niv','diplome']));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {
            $validator = validator::make($request->all(),[
            'libele' => 'required'
            ]);
            
            if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
                return redirect()->back();
            }
        $edite_prog = Program::findOrFail($request->prog);
        $edite_prog->libele = $request->input('libele');
        $edite_prog->save();
        Flashy::success('Your program has been successfully changed');
        return back();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'libele' => 'required'
        ]);

        if ($validator->fails()) {
            Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
      $prog = new Program();
      $prog->libele = $request->input('libele');
      $prog->save();
      Flashy::success('Your program has been successfully added');
      return redirect()->back();

        
    }

  
    public function destroy($id)
    {
        $delete_prog = Program::find($id);
        if($delete_prog)
        $delete_prog->delete();
        Flashy::success('Your program has been successfully deleted');
        return redirect()->back();
    }
}
