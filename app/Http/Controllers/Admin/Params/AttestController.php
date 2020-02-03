<?php

namespace App\Http\Controllers\Admin\Params;

use App\Models\Word;
use App\Models\Attest;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class AttestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $word = Word::all();
        $attests = Attest::paginate(12);
        return view('admin.attests.index',compact(['attests']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|min:3',
            'attest' => 'required|min:10'
        ]);

        Attest::create($request->all());
        Flashy::success('Your attest have been succefully saved');
        return redirect()->route('admin.params.attests.index');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attest = Attest::find($id);

        return view('admin.attests.edit',compact('attest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|min:3',
            'attest' => 'required|min:10'
        ]);
        $attest = Attest::find($id);

        $attest->update($request->all());
        Flashy::success('Your attest have been succefully changed');
        return redirect()->route('admin.params.attests.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attest = Attest::find($id);
        $attest->delete();
        Flashy::error('Your attest have been succefully deleted');
        return redirect()->route('admin.params.attests.index');
    }
}
