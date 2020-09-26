<?php

namespace App\Http\Controllers\Admin\Params;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PartenerController extends Controller
{


    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  


    public function store(Request $request)
    {
        $part = new Partner();

    
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'link' => 'required',
            "logo" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if ($validator->fails()) {
            Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        if($request->has('logo')){
            //On enregistre l'image dans un dossier
            $image = $request->file('logo');
            dd($image);
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/partners/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $part->logo = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
        $part->name = $request->input('name');
        $part->link = $request->input('link');
        $part->save();
        Flashy::success('Your partener has been successfully added');
        return redirect()->route('admin.welcome');
    }

    public function update(Request $request)
    {
        $edit_part = Partner::findOrFail($request->part);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'link' => 'required',
            "logo" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }

        $imgdel = $edit_part->logo;
        if($edit_part){
            if($request->has('logo')){
                //On enregistre l'image dans une variable
                $image = $request->file('logo');
                if(file_exists(public_path().$edit_part->logo))//On verifie si le fichier existe
                    Storage::delete(asset($edit_part->logo));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/partners/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_part->logo = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
        }
        $edit_part->name = $request->input('name');
        $edit_part->link = $request->input('link');
        $edit_part->save();
        Storage::disk('public')->delete($imgdel); 
        Flashy::success('Your partener has been successfully changed');
        return back();
    }

    public function destroy($id)
    {
        $delete_part = Partner::find($id);
        if($delete_part)
        $delete_part->delete();
        Flashy::success('Your partener has been successfully deleted');
        return redirect()->back();
    }
}
