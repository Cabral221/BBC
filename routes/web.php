<?php

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


// Authentication Routes...
    // Route::get('login', [
    //     'as' => 'login',
    //     'uses' => 'Auth\LoginController@showLoginForm'
    // ]);
Route::post('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);
            
// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
                            
// Registration Routes...
    // Route::get('register', [
    //     'as' => 'register',
    //     'uses' => 'Auth\RegisterController@showRegistrationForm'
    // ]);

Route::post('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@register'
]);


// Auth::routes();
                                    
                                    

// Authentification des Admins
Route::get('/login-admin','Admin\Auth\LoginController@showLoginForm')->name('login-admin');
Route::post('/login-admin','Admin\Auth\LoginController@login')->name('login-admin');
Route::post('/logout-admin','Admin\Auth\LoginController@logout')->name('logout-admin');
// Route::get('/home-admin', 'Admin\HomeController@index')->name('home-admin');

// Route pour l'enregistrement des
Route::post('/attachments', 'AttachmentController@store')->name('attachments.store');


// Route grouper des utilisateur
Route::name('user.')->group(function(){
    Route::get('/', 'User\HomeController@welcome')->name('welcome');
    // Route::get('/home', 'User\HomeController@index')->name('home');
    
    // Route::get('/programs','User\PageController@programs')->name('programs');
    
    Route::resource('/programs','User\ProgramController')->only(['index','show']);
    
    Route::resource('/networks','User\NetworkController')->only(['store']);
    // Route::resource('/programs/type','User\TypeController')->only(['index','show']);
    
    Route::get('/attests', 'User\PageController@attests')->name('attest');
    Route::get('/library','User\PageController@library')->name('library');
    Route::get('/contact','User\PageController@contact')->name('contact');
    Route::get('/member','User\PageController@member')->name('member');
    
    // Routes pour lo post de  messages
    Route::post('/message','User\MessageController@store')->name('message');
    
    Route::get('/admission', 'User\AdmissionController@index')->name('admission');
    Route::resource('/posts', 'User\PostController')->only(['index','show']);
});

// Route grouper des administrateur
Route::middleware(['middleware' => 'auth:admin'])->prefix('admin/')->name('admin.')->group(function(){
    Route::prefix('blog')->name('blog.')->group(function(){
        Route::resource('/posts','Admin\Blog\PostController');
        Route::resource('/gallerys','Admin\Blog\GalleryController');
        Route::resource('/books','Admin\Blog\BookController');
        Route::resource('/comments','Admin\Blog\CommentController');
        Route::resource('/news','Admin\Blog\NewController');
        Route::resource('/messages','Admin\Blog\MessageController');
        Route::post('/response','Admin\Blog\MessageController@response')->name('messages.response');
    });
    
    Route::prefix('programms')->name('programms.')->group(function(){
        Route::resource('/programms','Admin\Programms\HomeController');
        Route::resource('/filliers','Admin\Programms\FillierController');
        Route::resource('/diplomes','Admin\Programms\DiplomeController');
        Route::resource('/niveaux','Admin\Programms\NiveauController');
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
        Route::resource('/attests','Admin\Params\AttestController')->except(['show']);
    });

    Route::get('/','Admin\HomeController@welcome')->name('welcome');
    Route::get('/admin.edite/{id}','Auth\AdminController@edite')->name('edite');
    Route::put('/{id}/admin.edite','Auth\AdminController@update')->name('update');
});
     