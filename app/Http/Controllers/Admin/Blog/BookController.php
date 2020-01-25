<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function index()
    {
        $book = Book::All();
        return view('admin.books.index',compact('book'));
    }


    public function store(Request $request)
    {
        $book = new Book();
        
        $request->validate([
            "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        if($request->has('image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/book/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $book->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
            $book->title = $request->input('title');
            $book->dateOut = $request->input('dateout');
            $book->auteur = $request->input('auteur');
            $book->save();
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
        $edit_book = Book::findOrFail($request->book);
        
        if($edit_book){
            if($request->has('image')){
                //On enregistre l'image dans une variable
                $image = $request->file('image');
                // dd($image);
                if(file_exists(public_path().$edit_book->image))//On verifie si le fichier existe
                    Storage::delete(asset($edit_book->image));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/book/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $edit_book->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
        }
        $edit_book->title = $request->input('title');
        $edit_book->auteur = $request->input('auteur');
        $edit_book->dateOut = $request->input('dateOut');
        $edit_book->save();
        return back();
    }



    public function destroy($id)
    {
        $delet_book = Book::find($id);
        if($delet_book)
        $delet_book->delete();
        return redirect()->back();
    }
}
