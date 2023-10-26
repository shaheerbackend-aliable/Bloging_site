<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ContactController;
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
    Route::get('admin/updateblog/{id}', [UploadController::class, 'update_form'])->name('admin.up_blog');
    Route::post('admin/update/{id}', [UploadController::class, 'update_blog'])->name('admin.update');
    Route::get('admin/delete/{id}', [UploadController::class, 'delete_blog'])->name('admin.delete');
    Route::get('admin/subscriber', [SubscriberController::class, 'show_data'])->name('admin.subscriber');
});
Route::middleware('user')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('user/blog', [UserController::class, 'blog'])->name('user.blog');
    Route::post('user/contact', [ContactController::class, 'store'])->name('user.contact');
    Route::get('user/blogdetail/{id}', [UserController::class, 'blog_detail'])->name('user.blogdetail');
    Route::get('user/search', [UserController::class, 'search'])->name('user.search');
});

Route::get('/message', function () {
    return "Ani deya mzaak ae";
})->name("message");


require __DIR__.'/auth.php';
