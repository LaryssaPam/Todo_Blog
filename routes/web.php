<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
    Route::delete('/post', [PostController::class, 'destroy'])->name('post.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::get('comment/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comment/{comment}', [CommentController::class, 'show'])->name('comment.show');
    Route::delete('/comment', [CommentController::class, 'destroy'])->name('comment.destroy');

});





require __DIR__.'/auth.php';
