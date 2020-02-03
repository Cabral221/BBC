<?php

namespace App\Http\Controllers\Admin\Members;

use App\Models\Link;
use App\Models\Network;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class NetworkController extends Controller
{
    public function index()
    {
        $network = Network::paginate(15);
        $links = Link::all();
        return view('admin.networks.index',compact('network','links'));
    }

    public function destroy($id)
     {
         $delete_network = Network::find($id);
         if($delete_network)
         $delete_network->delete();
         Flashy::error('Your followers has been successfully deleted');
         return redirect()->back();
     }
}
