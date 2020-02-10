<?php

namespace App\Http\Controllers\Admin\Params;

use App\Models\Team;
use App\Models\Word;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WordController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $word = Word::all();
        return view('admin.words.index',compact((['teams','word'])));
    }

    public function update(Request $request)
    {  
        $validator = Validator::make($request->all(), [
        'content' => 'required'
    ]);

    if ($validator->fails()) {
            flashy::error($validator->messages()->first());
        return redirect()->back();
    }
        $word_update = Word::findOrFail($request->word);
        $word_update->content = $request->input('content');
        $word_update->save();
        Flashy::success('Your word has been successfully changed');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word' => 'required',
            'content' => 'required'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $word = new Word();
        $word->team_id = $request->input('word');
        $word->content = $request->input('content');
        $word->save();
        Flashy::success('Your word has been successfully added');
        return redirect()->back();
    }

 
}
