<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('home.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/upload', [UploadController::class, 'view'])->name('admin.upload');
    Route::post('admin/post', [UploadController::class, 'post'])->name('admin.post');
    Route::get('admin/data', [UploadController::class, 'blog_data'])->name('admin.blog');
});
Route::middleware('user')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('user/blog', [UserController::class, 'blog'])->name('user.blog');
});

Route::get('/message', function () {
    return "Ani deya mzaak ae";
})->name("message");


require __DIR__.'/auth.php';
