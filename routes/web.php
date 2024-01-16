<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialiteController;

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

Route::resource('products', ProductController::class);
Route::get('/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [SocialiteController::class, 'callback']);
Route::get('/tambah', [ProductController::class, 'create']);
Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('home',[])
Route::get('/logout', [SocialiteController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('products.home');
});
Route::get('/about', function () {
    return view('products.about');
});


Route::get('/', function () {
    return view('products.welcome');
});
Route::get('/edit', function () {
    return view('products.edit');
});
Route::get('/delete', function () {
    return view('products.show');
});

// Route::get('/prodak',[ProductController::class,'index']);


