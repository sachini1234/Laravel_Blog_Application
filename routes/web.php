<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AllPostController;
use App\Http\Controllers\EditPostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Create New Blogs
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{postsId}/show', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/all', [AllPostController::class, 'allposts'])->name('posts.all');
Route::get('/posts/{postsId}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{postsId}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{postsId}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::post('/posts/comment', [CommentController::class, 'comment'])->name('posts.comment');