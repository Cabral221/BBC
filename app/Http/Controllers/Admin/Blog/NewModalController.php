<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Modal;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class NewModalController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required',
        ]);
        
        $modal = Modal::find($id);
        $modal->update([
            'title' => $request->title,
            'content' => $request->body
        ]);
        
        Flashy::success('Your modal has been successfully changed');
        return \redirect()->back();
    }

    public function toggle() 
    {
        $modal = Modal::first();
        if($modal->is_active == false){
            $modal->is_active = true;
            $modal->save();
            Flashy::success('Your modal has been enable');
            return \redirect()->back();
        }
        $modal->is_active = false;
        $modal->save();
        Flashy::success('Your modal has been desabled');
        return \redirect()->back();
               
    }

}
