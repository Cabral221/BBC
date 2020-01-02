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

Route::get('/', function () {
    return view('welcome');
});


// Authentification des clients
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Authentification des Admins
    Route::get('/login-admin','Admin\Auth\LoginController@showLoginForm')->name('login-admin');
    Route::post('/login-admin','Admin\Auth\LoginController@login')->name('login-admin');
    Route::post('/logout-admin','Admin\Auth\LoginController@logout')->name('logout-admin');
        // Inscription Admin
        // Route::get('/register-admin','Admin\Auth\RegisterController@showRegistrationForm')->name('register-admin');
        // Route::post('/register-admin','Admin\Auth\RegisterController@register')->name('register-admin');
        // La page de bureau des Admin
    Route::get('/home-admin', 'Admin\HomeController@index')->name('home-admin');

 
Route::post('/attachments', 'AttachmentController@store')->name('attachments.store');

Route::name('admin.')->group(function(){
    Route::resource('/admin/posts','Admin\PostController');
    
});
