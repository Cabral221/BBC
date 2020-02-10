<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Gallerie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function index()
    {
        $affiche = Gallerie::paginate(12);
        return view('admin.gallerys.index',compact('affiche'));
    }

 

    public function store(Request $request)
    {
        $image_add = new Gallerie();
        $validator = Validator::make($request->all(), [
            "libele" => 'required|min:2',
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
            $folder = '/uploads/galleries/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $image_add->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            $image_add->libele = $request->input('libele');
            $image_add->save();
            Flashy::success('Your image has been successfully added');
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
        $validator = Validator::make($request->all(), [
            "libele" => 'required|min:2',
            "image" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }
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
            Flashy::success('Your image has been successfully changed');
            return redirect()->back();
    }

    public function destroy($id)
    {
        $delet_img = Gallerie::find($id);
        if($delet_img)
        $delet_img->delete();
        Flashy::success('Your Image has been successfully deleted');
        return redirect()->back();
        
    }
}
