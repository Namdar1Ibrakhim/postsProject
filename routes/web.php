<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/home', [HomeController::class,'allData'])->name('home');

Route::get('post', function () {
    return view('post');
})->name('post');

Route::post('posted', [HomeController::class,'addPost']);

Route::get('aboutpost/{id}', [HomeController::class,'aboutPost']);

Route::get('comment/{id}', [HomeController::class,'comment']);


Route::post('commented/{id}', [HomeController::class,'commented']);


Route::get('deletepost/{id}', [HomeController::class,'deletepost']);

Route::get('editpost/{id}', [HomeController::class,'editpost']);

Route::post('editpost/{id}/update', [HomeController::class,'updatepost'])->name('contact-update-submit');

Route::get('editcomment/{id}', [HomeController::class,'editcomment']);

Route::post('editcomment/{id}/update', [HomeController::class,'updatecomment'])->name('comment-update-submit');

Route::get('deletecomment/{id}', [HomeController::class,'deletecomment']);



