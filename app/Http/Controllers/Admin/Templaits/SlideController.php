<?php

namespace App\Http\Controllers\Admin\Templaits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Slide;
use Illuminate\Http\UploadedFile;
class SlideController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     } 
    public function store(Request $request)
    {

        $slides = new Slide();
        
        $request->validate([
            "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if($request->has('image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/slides/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $slides->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            // $slides->image = $request->input('image');
            $slides->save();
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
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
         ]);
         $edit_slide = Slide::findOrFail($request->slides);
        // dd($edit_slide);
        if($edit_slide){
            if($request->has('image')){
                //On enregistre l'image dans une variable
                $image = $request->file('image');
                if(file_exists(public_path().$edit_slide->image))//On verifie si le fichier existe
                    Storage::delete(asset($edit_slide->image));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/slides/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_slide->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
            $edit_slide->save();
        }
        return redirect()->route('admin.welcome');
     }

    public function delete()
    {
        
    }
}
