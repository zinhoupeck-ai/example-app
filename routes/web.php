<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard',[PostController::class,'index'])
    ->middleware(['auth','verified'])->name('dashboard');

    Route::get('/post/create', [PostController::class,'create'])
    ->middleware(['auth','verified'])
    ->name('post.create');

    Route::post('/post', [PostController::class,'store'])
    ->name('post.store');

    Route::get('/post/{post:slug}', [PostController::class,'edit'])
    ->name('post.edit');

    Route::put('/post/{post}', [PostController::class,'update'])
    ->name('post.update');

    Route::delete('/post/{post}', [PostController::class,'destroy'])
    ->name('post.destroy');
    
    Route::get('/@{username}/{post:slug}', [PostController::class, 'show'])
    ->name('post.show');

    Route::get('/@{user:name}',[PublicProfileController::class,'show'])
    ->name('profile.show');

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
