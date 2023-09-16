<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Livewire\AdminDashboard;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');

Route::get('/dashboard',[AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/posts',[AdminController::class,'posts'])->middleware(['auth', 'verified'])->name('posts');
Route::get('/all-posts' ,[AdminController::class, 'render'])->middleware(['auth', 'verified'])->name('livewire.post-list');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
