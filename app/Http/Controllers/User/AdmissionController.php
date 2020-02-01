<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Slide;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Admission;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        $programs = Program::all();
        return view('pages.admission', compact(['info','partners','image','programs']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'program_id' => 'required',
            'niveau_id' => 'required',
            'filiere_id' => 'required',
            'firstname' => 'required|string|min:2',
            'lastname' => 'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required|integer',
        ]);


        Admission::create($request->all());
        Flashy::success('your pre-registration has been sent. We will study it as soon as possible Thank you for your trust.');
        return redirect()->route('user.admission');
    }

    public function getNiveau(Request $request)
    {
        $this->validate($request,[
            'id' => 'required|integer'
        ]);
        
        $p = Program::find($request->id);
        return response()->json($p->niveaux);
    }

    public function getFiliere(Request $request)
    {
        $this->validate($request,[
            'id' => 'required|integer'
        ]);
        
        $p = Program::find($request->id);
        return response()->json($p->filieres);
    }

}
