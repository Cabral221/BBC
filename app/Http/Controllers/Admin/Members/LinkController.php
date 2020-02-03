<?php

namespace App\Http\Controllers\Admin\Members;

use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'link' => 'required|url'
        ]);

        Link::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link,
        ]);

        Flashy::success('Link successfully saved');
        return redirect()->back();
        dd($request)->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
         if($link)
         $link->delete();
         Flashy::error('Your link has been successfully deleted');
         return redirect()->back();
    }
}
