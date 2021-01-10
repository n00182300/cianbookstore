<?php
# @Date:   2020-11-07T15:42:41+00:00
# @Last modified time: 2020-11-07T17:45:41+00:00




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\BookController as UserBookController;
use App\Http\Controllers\Admin\BookController as AdminBookController;

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



Auth::routes();

Route::get('/',[PageController::class,'welcome'])->name('welcome');
Route::get('/about',[PageController::class,'about'])->name('about');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/books', [UserBookController::class, 'index'])->name('user.books.index');
Route::get('/user/books/{id}', [UserBookController::class, 'show'])->name('user.books.show');

Route::get('/admin/books', [AdminBookController::class, 'index'])->name('admin.books.index');
Route::get('/admin/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
Route::get('/admin/books/{id}', [AdminBookController::class, 'show'])->name('admin.books.show');
Route::post('/admin/books/store', [AdminBookController::class, 'store'])->name('admin.books.store');
Route::get('/admin/books/{id}/edit', [AdminBookController::class, 'edit'])->name('admin.books.edit');
Route::put('/admin/books/{id}', [AdminBookController::class, 'update'])->name('admin.books.update');
Route::delete('/admin/books/{id}', [AdminBookController::class, 'destroy'])->name('admin.books.destroy');
