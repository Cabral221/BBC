<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Document;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    public function index()
    {
        $doc  =  Document::paginate(10);
        return view('admin.documents.index',compact('doc'));
    }

    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  
    
    public function store(Request $request)
    {
        // dd($request->all());
        $docs = new Document();
        
        $this->validate($request,[
            // "url" => 'nullable | file | mimetypes:file/pdf,file/docx,file/doc,file/txt,file/xlsx,file/pptx,file/accdb,file/zip | max: 2048'
                "url" => 'mimes:pdf'
            ]);
            // dd($request->all());
            
        if($request->has('url')){
            //On enregistre l'url dans un dossier
            $url = $request->file('url');
            //Nous allons definir le nom de notre url en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/documents/';
            //Nous allons enregistrer le chemin complet de l'url dans la BD
            $docs->url = $folder.$image_name.'.'.$url->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'url dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($url, $folder, 'public', $image_name);
        }
            $docs->name = $request->input('libele');
            $docs->save();
            Flashy::success('Your document has been successfully saved');
            return redirect()->back();
    }

    public function destroy($id)
    {
        $deledoc = Document::find($id);
        if($deledoc)
        $deledoc->delete();
        Flashy::success('Your document has been deleted');
        return redirect()->back();
    }
}
