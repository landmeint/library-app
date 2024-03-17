<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::get('/home', [HomeController::class,'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('login/loading', 'loading')->name('loading');
    Route::get('register', 'regispage')->name('regispage');
    Route::post('register/loading', 'register')->name('register');
    Route::get('logout', 'logout')->name('logout');
});

Route::get('/', [HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('search', [HomeController::class,'search'])->middleware('auth')->name('search');
Route::get('catalog', [HomeController::class,'catalog'])->middleware('auth')->name('catalog');
Route::get('about', [HomeController::class,'about'])->middleware('auth')->name('about');

Route::get('borrow', [BorrowController::class,'index'])->middleware('auth')->name('borrow');
Route::get('borrow/create', [BorrowController::class,'create'])->middleware('auth')->name('borrow_create');
Route::post('borrow/create', [BorrowController::class,'store'])->middleware('auth')->name('borrow_store');
Route::get('borrow/{id}/edit', [BorrowController::class,'edit'])->middleware('auth')->name('borrow_edit');
Route::put('borrow/edit/{id}', [BorrowController::class,'update'])->middleware('auth')->name('borrow_update');
Route::delete('/borrow/{id}', [BorrowController::class, 'destroy'])->name('borrow.destroy');

Route::get('book', [BookController::class,'index'])->middleware('auth')->name('book');
Route::get('book/create', [BookController::class,'create'])->middleware('auth')->name('book_create');
Route::post('book/create', [BookController::class,'store'])->middleware('auth')->name('book_store');
Route::get('book/{id}/edit', [BookController::class,'edit'])->middleware('auth')->name('book_edit');
Route::put('book/edit/{id}', [BookController::class,'update'])->middleware('auth')->name('book_update');
Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::get('category', [CategoryController::class,'index'])->middleware('auth')->name('category');
Route::get('category/create', [CategoryController::class,'create'])->middleware('auth')->name('category_create');
Route::post('category/create', [CategoryController::class,'store'])->middleware('auth')->name('category_store');
Route::get('category/{id}/edit', [CategoryController::class,'edit'])->middleware('auth')->name('category_edit');
Route::put('category/edit/{id}', [CategoryController::class,'update'])->middleware('auth')->name('category_update');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
