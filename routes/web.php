<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth.register');
// });

Route::get('/', [AuthController:: class, 'loginForm'])->name('login');
Route::post('/', [AuthController:: class, 'login']);
Route::get('/register', [AuthController:: class, 'registerForm']);
Route::post('/register', [AuthController:: class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::middleware(['auth'])->group(function () {
    Route::get('/landing', [SiteController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);


    Route::get('/authors', [UserController::class, 'index'])->name('authors');
    Route::get('categories',  [PostController::class, 'byCategory'])->name('categories');
    Route::get('/authors/{author}', [PostController::class, 'byAuthor']);
    Route::get('/posts', [PostController::class, 'all'])->name('posts');
});
