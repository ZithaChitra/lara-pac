<?php

use Illuminate\Support\Facades\Route;
use Blessing\BrandsplashPackage\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/update', function(){
    dd('update route');
})->name('update');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');





?>