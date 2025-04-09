<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/category/add', [CategoryController::class, 'add'])->name( 'category.add');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/user/add', [UserController::class, 'add'])->name( 'user.add');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');

// Route::get('/user/add', [UserController::class, 'add'])->name( 'user.add');
// Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

// Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
