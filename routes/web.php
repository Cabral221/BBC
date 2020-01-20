<?php

use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Authentification des users
Auth::routes();


// Authentification des Admins
Route::get('/login-admin','Admin\Auth\LoginController@showLoginForm')->name('login-admin');
Route::post('/login-admin','Admin\Auth\LoginController@login')->name('login-admin');
Route::post('/logout-admin','Admin\Auth\LoginController@logout')->name('logout-admin');
Route::get('/home-admin', 'Admin\HomeController@index')->name('home-admin');

// Route pour l'enregistrement des
Route::post('/attachments', 'AttachmentController@store')->name('attachments.store');


// Route grouper des utilisateur
Route::name('user.')->group(function(){
    Route::get('/', 'User\HomeController@welcome')->name('welcome');
    Route::get('/home', 'User\HomeController@index')->name('home');

    Route::get('/programs','User\PageController@programs')->name('programs');
    
    Route::resource('/programs','User\ProgramController')->only(['index','show']);
    // Route::resource('/programs/type','User\TypeController')->only(['index','show']);

    Route::get('/library','User\PageController@library')->name('library');
    Route::get('/contact','User\PageController@contact')->name('contact');
    Route::get('/member','User\PageController@member')->name('member');

    Route::get('/admission', 'User\AdmissionController@index')->name('admission');
    Route::resource('/posts', 'User\PostController')->only(['index','show']);
});

// Route grouper des administrateur
Route::prefix('admin/')->name('admin.')->group(function(){
    Route::prefix('blog')->name('blog.')->group(function(){
        Route::resource('/posts','Admin\Blog\PostController');
        Route::resource('/gallerys','Admin\Blog\GalleryController');
        Route::resource('/books','Admin\Blog\BookController');
        Route::resource('/comments','Admin\Blog\CommentController');
        Route::resource('/news','Admin\Blog\NewController');
    });

    Route::prefix('programms')->name('programms.')->group(function(){
        Route::resource('/filliers','Admin\Programms\FillierController');
        Route::resource('/modules','Admin\Programms\ModuleController');
        Route::resource('/specialites','Admin\Programms\SpecialiteController');
        Route::resource('/unites','Admin\Programms\UniteController');
    });

    Route::prefix('templaits')->name('templaits.')->group(function(){
        Route::resource('/alerts','Admin\Templaits\AlertController');
        Route::resource('/slides','Admin\Templaits\SlideController');
    });

    Route::prefix('members')->name('members.')->group(function(){
        Route::resource('/teams','Admin\Members\TeamController');
        Route::resource('/networks','Admin\Members\NetworkController');
    });

    Route::prefix('params')->name('params.')->group(function(){
        Route::resource('/infos','Admin\Params\InfoController');
        Route::resource('/admissions','Admin\Params\AdmissionController');
        Route::resource('/words','Admin\Params\WordController');
        Route::resource('/parteners','Admin\Params\PartenerController');
    });

    Route::get('/','Admin\HomeController@welcome')->name('welcome');
});

