<?php

use Illuminate\Support\Facades\Route;

//Praktikum 3
Route::get('/greeting', [App\Http\Controllers\WelcomeController::class,'greeting']);
// Route::get ('/greeting', function () {
//     return view ('blog.hello', ['name' => 'Syava' ]) ;});

//Praktikum 2
use App\Htpp\Controllers\PhotoController;

Route::resource ('photos', App\Http\Controllers\PhotoController:: class);
Route::resource ('photos', App\Http\Controllers\PhotoController:: class) ->only (['index', 'show']);
Route::resource ('photos', App\Http\Controllers\PhotoController:: class) ->except(['create', 'store', 'update', 'destroy']);

// MODIF
Route::get('/homepage', [App\Http\Controllers\PageController::class,'home']);
Route::get('/aboutpage', [App\Http\Controllers\PageController::class,'about']);
Route::get('/articlespage/{id}', [App\Http\Controllers\PageController::class,'articles']);

//

Route::get('/index', [App\Http\Controllers\PageController::class,'index']);

Route::get('/about', [App\Http\Controllers\PageController::class,'about']);

Route::get('/articles', [App\Http\Controllers\PageController::class,'articles']);

Route::get('/hello', [App\Http\Controllers\WelcomeController::class,'hello']);


//Praktikum 1
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {    
    return 'Post ke- '.$postId." Komentar ke-: ".$commentId; }); 

Route::get('/user/{syava}', function ($syava) {    
    return 'Nama saya '.$syava; });

Route::get('/about', function () {    
    return '2241760129_SYAVA APRILIA P'; }); 

Route::get('/', function () {    
    return 'Selamat Datang'; }); 

Route::get('/world', function () {    
    return 'World'; 
});

Route::get('/hello', function () {    
    return 'Hello World'; }); 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


