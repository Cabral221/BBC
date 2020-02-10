<?php

namespace App\Http\Controllers\Admin\Templaits;

use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        
        $validator = Validator::make($request->all(), [
            "image" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }

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
            Flashy::success('Your image has been successfully added');
        return redirect()->route('admin.welcome');
    }

    public function update(Request $request){
     

         $validator = Validator::make($request->all(), [
            "image" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }

         $edit_slide = Slide::findOrFail($request->slides);
         $imagedel = $edit_slide->image;

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
            Storage::disk('public')->delete($imagedel); 
            $imgDel = $edit_slide->image;
            $edit_slide->save();
            Storage::disk('public')->delete($imgDel);
        }
        Flashy::success('Your image has been successfully changed');
        return redirect()->route('admin.welcome');
     }

    public function destroy($id)
    {
        $delete_slides = Slide::find($id);
        if($delete_slides);
        $delete_slides->delete();
        Flashy::success('Your image has been successfully delete');
        return redirect()->back();
    }
}
