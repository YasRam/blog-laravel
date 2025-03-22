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
    return view('app');
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'index']);
Route::get('/post/edit', [PostController::class, 'index']);
Route::get('/post/delete', [PostController::class, 'index']);

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