<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});


