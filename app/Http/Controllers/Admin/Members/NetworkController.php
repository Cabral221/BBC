<?php

namespace App\Http\Controllers\Admin\Members;

use App\Models\Network;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class NetworkController extends Controller
{
    public function index()
    {
        $network = Network::All();
        return view('admin.networks.index',compact('network'));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function store()
    {
        
    }

    public function destroy($id)
     {
         $delete_network = Network::find($id);
         if($delete_network)
         $delete_network->delete();
         Flashy::success('Your followers has been successfully changed');
         return redirect()->back();
     }
}
