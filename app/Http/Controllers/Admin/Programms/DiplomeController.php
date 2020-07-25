<?php

namespace App\Http\Controllers\Admin\Programms;

use App\Models\Diplome;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DiplomeController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'libele' => 'required|min:2',
            'prog_dip' => 'required|integer'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
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
        if(!$delete_prog){
            Flashy::success('Your diploma is not valid');
            return redirect()->back();
        }
        
        $delete_prog->delete();
        Flashy::success('Your diploma has been successfully deleted');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'libele_dip' => 'required|min:2',
            'dip_prog' => 'required|integer'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $edite_prog = Diplome::findOrFail($request->diplome);
        $edite_prog->libele = $request->input('libele_dip');
        $edite_prog->program_id = $request->input('dip_prog');
        $edite_prog->save();
        Flashy::success('Your diploma has been successfully changed');
        return back();
    }
      
}
