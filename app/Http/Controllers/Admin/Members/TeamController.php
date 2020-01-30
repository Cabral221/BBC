<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Team;
use Illuminate\Http\UploadedFile;
class TeamController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     } 
    public function store(Request $request)
    {

        $team = new Team();
        
        $request->validate([
            'lastname'=>'required|min:2',
            'firstname' => 'required|min:2',
            'job' => 'required|min:2',
            "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if($request->has('image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/teams/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $team->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            $team->firstname = $request->input('firstname');
            $team->lastname = $request->input('lastname');
            $team->job = $request->input('job');
            $team->save();
        return redirect()->route('admin.welcome');
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request){
        $data = $request->validate([
            'lastname'=>'required|min:2',
            'firstname' => 'required|min:2',
            'job' => 'required|min:2',
            "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
         ]);
         $edit_team = Team::findOrFail($request->team);
        // dd($edit_team);
        if($edit_team){
            if($request->has('image')){
                //On enregistre l'image dans une variable
                $image = $request->file('image');
                if(file_exists(public_path().$edit_team->image))//On verifie si le fichier existe
                    Storage::delete(asset($edit_team->image));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/teams/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_team->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
            $edit_team->firstname = $request->input('firstname');
            $edit_team->lastname = $request->input('lastname');
            $edit_team->job = $request->input('job');
            $edit_team->save();
        }
        return redirect()->route('admin.welcome');
     }

     public function destroy($id)
     {
         $delete_team = Team::find($id);
         if($delete_team)
         $delete_team->delete();
         return redirect()->back();
     }
}
