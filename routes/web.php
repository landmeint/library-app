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

Route::get('book', [BookController::class,'index'])->middleware('auth')->name('book');

Route::get('category', [CategoryController::class,'index'])->middleware('auth')->name('category');
