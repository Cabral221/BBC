<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Gallerie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function index()
    {
        $affiche = Gallerie::All();
        return view('admin.gallerys.index',compact('affiche'));
    }

 

    public function store(Request $request)
    {
        $image_add = new Gallerie();
        
        $request->validate([
            "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if($request->has('image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/galleries/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $image_add->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            $image_add->libele = $request->input('libele');
            $image_add->save();
            return redirect()->back();
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {
        $edit_fil = Gallerie::findOrFail($request->image_id);
        $imgdel =$edit_fil->image;
        if($edit_fil){
            if($request->has('image')){
                //On enregistre l'image dans une variable
                $image = $request->file('image');
                if(file_exists(public_path().$edit_fil->image))//On verifie si le fichier existe
                    Storage::delete(asset($edit_fil->image));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/galleries/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_fil->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
        }
            $edit_fil->libele = $request->input('libele');
            $edit_fil->save();
            Storage::disk('public')->delete($imgdel); 
            return redirect()->back();
    }

    public function destroy($id)
    {
        $delet_img = Gallerie::find($id);
        if($delet_img)
        $delet_img->delete();
        return redirect()->back();
        
    }
}
