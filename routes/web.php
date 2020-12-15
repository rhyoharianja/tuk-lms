<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MGroupController;

use App\Http\Controllers\Backend\MAuthorController;

use App\Http\Controllers\Backend\MenuController;

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

Route::get('/book/search', function () {
    return view('search_book');
})->name('book-search');

Route::get('/book/detail', function () {
    return view('book_detail');
})->name('book-detail');

Route::get('/book/read', function () {
    return view('book_read');
})->name('book-read');

Route::get('/user/profile', function () {
    return view('profile');
})->name('user-profile');

Route::get('/user/wishlist', function () {
    return view('wishlist');
})->name('user-wishlist');

Route::get('/user/review', function () {
    return view('review');
})->name('user-review');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Auth::routes();

Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/mgroups', MGroupController::class);
    Route::resource('admin/mauthors', MAuthorController::class);
    Route::resource('admin/menus', MenuController::class);
});
