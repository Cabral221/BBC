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
    Route::get('/library','User\PageController@library')->name('library');
    Route::get('/contact','User\PageController@contact')->name('contact');
    Route::get('/member','User\PageController@member')->name('member');
});

// Route grouper des administrateur
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/','Admin\HomeController@welcome');
    Route::resource('/posts','Admin\Blog\PostController');
});

