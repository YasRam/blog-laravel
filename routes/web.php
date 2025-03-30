<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('pages.app');
});

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/post/add', [PostController::class, 'add'])->name( 'post.add');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post.update');

Route::get('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');


Route::get('/category', [PostController::class, 'index']);
Route::get('/category/create', [PostController::class, 'index']);
Route::get('/category/edit', [PostController::class, 'index']);
Route::get('/category/delete', [PostController::class, 'index']);

Route::get('/user', [PostController::class, 'index']);
Route::get('/user/create', [PostController::class, 'index']);
Route::get('/user/edit', [PostController::class, 'index']);
Route::get('/user/delete', [PostController::class, 'index']);

Route::get('/comment', [PostController::class, 'index']);
Route::get('/comment/create', [PostController::class, 'index']);
Route::get('/comment/edit', [PostController::class, 'index']);
Route::get('/comment/delete', [PostController::class, 'index']);
