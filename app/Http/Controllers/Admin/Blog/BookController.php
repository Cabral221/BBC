<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }  

    public function index()
    {
        $book = Book::paginate(10);
        return view('admin.books.index',compact('book'));
    }


    public function store(Request $request)
    {
        $book = new Book();
        

        $validator = Validator::make($request->all(), [
            'title' => 'required|min:2',
            'dateout' => 'required|min:2',
            'auteur' => 'required',
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
            Flashy::success('Your book has been successfully added');
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
            'title' => 'required|min:2',
            'dateout' => 'required|min:2',
            'auteur' => 'required',
            "image" => 'required | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }
        $edit_book = Book::findOrFail($request->book);
        $imgdel = $edit_book->image;

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
        Storage::disk('public')->delete($imgdel); 
        Flashy::success('Your book has been successfully changed');
        return back();
    }



    public function destroy($id)
    {
        $delet_book = Book::find($id);
        if($delet_book)
        $delet_book->delete();
        Flashy::success('Your book has been successfully deleted');
        return redirect()->back();
    }
}
