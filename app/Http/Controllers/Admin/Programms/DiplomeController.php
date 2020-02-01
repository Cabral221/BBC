<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Diplome;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class DiplomeController extends Controller
{
    public function store(Request $request)
    {
        $diplome = new Diplome();
        $diplome->libele = $request->input('libele');
        $diplome->program_id = $request->input('prog_dip');
        $diplome->save();
        Flashy::success('Your diploma has been successfully added');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $delete_prog = Diplome::find($id);
        if($delete_prog)
        $delete_prog->delete();
        Flashy::success('Your diploma has been successfully deleted');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $edite_prog = Diplome::findOrFail($request->diplome);
        $edite_prog->libele = $request->input('libele_dip');
        $edite_prog->program_id = $request->input('dip_prog');
        $edite_prog->save();
        Flashy::success('Your diploma has been successfully changed');
        return back();
    }
      
}
