<?php

namespace App\Http\Controllers\Admin\Programms;
use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class FillierController extends Controller
{



    public function index()
    {
        $progs = Program::All();
        $fillier = Filiere::get();
        return view('admin.programms.filliers.index',compact(['fillier','progs']));
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

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function store(Request $request)
    {
        $filier = new Filiere();
        
        $request->validate([
            "icon" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if($request->has('icon')){
            //On enregistre l'image dans un dossier
            $image = $request->file('icon');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/filiere/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $filier->icon = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            $filier->program_id = $request->input('program_id');
            $filier->libele = $request->input('libele');
            $filier->describe = $request->input('describe');
            $filier->diplome = $request->input('diplome');
            $filier->duration = $request->input('duration');
            $filier->requirement = $request->input('requirement');
            $filier->outCome = $request->input('outCome');
            $filier->save();
            return redirect()->route('admin.programms.filliers.index');
    }

    public function destroy($id)
    {
        $delete_filiere = Filiere::find($id);
        if($delete_filiere)
        $delete_filiere->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $fil = Filiere::find($id);
        return view('admin.programms.filliers.create',compact('fil'));
    }
}
