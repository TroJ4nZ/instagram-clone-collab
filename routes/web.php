<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('users/profile/', [UserController::class, 'profile'])->middleware('auth')->name('users.profile');
Route::get('users/profile/edit', [UserController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::put('users/profile/', [UserController::class, 'update'])->middleware('auth')->name('profile.update');


Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
