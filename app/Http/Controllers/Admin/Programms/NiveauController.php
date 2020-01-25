<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NiveauController extends Controller
{
    public function store(Request $request)
    {
      $niveau = new Niveau();
      $niveau->libele = $request->input('libele');
      $niveau->program_id = $request->input('prog_niv');
      $niveau->save();
      return redirect()->back();
    }

    public function destroy($id)
    {
        $delete_prog = Niveau::find($id);
        if($delete_prog)
        $delete_prog->delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $edite_prog = Niveau::findOrFail($request->nivo);
        $edite_prog->libele = $request->input('libele_niv');
        $edite_prog->program_id = $request->input('niv_prog');
        $edite_prog->save();
        return back();
    }
}



