<?php

namespace App\Http\Controllers\Admin\Programms;
use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FillierController extends Controller
{



    public function index()
    {
        $progs = Program::All();
        $fillier = Filiere::notDraft()->get();
        return view('admin.programms.filliers.index',compact(['fillier','progs']));
    }


    public function edit($id)
    {
        $progs = Program::All();
        $fil = Filiere::find($id);
        return view('admin.programms.filliers.edit',compact(['fil','progs']));
    }

  

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function store(Request $request)
    {
        $filier = new Filiere();
        $validator = Validator::make($request->all(), [
            'program_id' => 'required',
            'libele' => 'required|min:2',
            'describe' => 'required',
            'duration' => 'required',
            'requirement' => 'required',
            'outCome' => 'required',
            "icon" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }

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
            $filier->duration = $request->input('duration');
            $filier->requirement = $request->input('requirement');
            $filier->outCome = $request->input('outCome');
            $filier->save();
            Flashy::success('Your faculty has been successfully added');
            return redirect()->route('admin.programms.filliers.index');
    }



    public function update(Request $request,$id)
    {
        $edit_fil = Filiere::find($id);
        $validator = Validator::make($request->all(), [
            'program_id' => 'required',
            'libele' => 'required|min:2',
            'describe' => 'required',
            'duration' => 'required',
            'requirement' => 'required',
            'outCome' => 'required',
            "icon" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                Flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $imgdel = $edit_fil->icon;
        if($edit_fil){
            if($request->has('icon')){
                //On enregistre l'image dans une variable
                $image = $request->file('icon');
                if(file_exists(public_path().$edit_fil->icon))//On verifie si le fichier existe
                    Storage::delete(asset($edit_fil->icon));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/filiere/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_fil->icon = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
        }
            $edit_fil->program_id = $request->input('program_id');
            $edit_fil->libele = $request->input('libele');
            $edit_fil->describe = $request->input('describe');
            $edit_fil->duration = $request->input('duration');
            $edit_fil->requirement = $request->input('requirement');
            $edit_fil->outCome = $request->input('outCome');
            $edit_fil->save();
            Storage::disk('public')->delete($imgdel); 
            Flashy::success('Your faculty has been successfully changed');
            return redirect()->route('admin.programms.filliers.index');
    }


    public function destroy($id)
    {
        $delete_filiere = Filiere::find($id);
        if($delete_filiere)
        $delete_filiere->delete();
        Flashy::success('Your faculty has been successfully deleted');
        return redirect()->back();
    }

    public function show($id)
    {
        $fil = Filiere::find($id);
        return view('admin.programms.filliers.create',compact('fil'));
    }
}
