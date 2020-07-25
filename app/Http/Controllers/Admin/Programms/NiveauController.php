<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Niveau;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NiveauController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prog_niv' => 'required|integer',
            'libele' => 'required|min:2'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
      $niveau = new Niveau();
      $niveau->libele = $request->input('libele');
      $niveau->program_id = $request->input('prog_niv');
      $niveau->save();
      Flashy::success('Your level has been successfully added');
      return redirect()->back();
    }

    public function destroy($id)
    {
        $delete_prog = Niveau::find($id);
        if($delete_prog)
        $delete_prog->delete();
        Flashy::success('Your level has been successfully deleted');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'libele_niv' => 'required|min:2',
            'niv_prog' => 'required'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $edite_prog = Niveau::findOrFail($request->nivo);
        $edite_prog->libele = $request->input('libele_niv');
        $edite_prog->program_id = $request->input('niv_prog');
        $edite_prog->save();
        Flashy::success('Your level has been successfully changed');
        return back();
    }
}



