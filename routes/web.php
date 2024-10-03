<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CafeController;



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
    return view('home');
});
// Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'loginn']);
Route::get('/auth', [UserController::class, 'auth']);
Route::get('/home', [UserController::class, 'tampil']);
Route::get('/cafeterdekat', [UserController::class, 'deket']);
Route::get('/reviewcafe', [UserController::class, 'view']);
Route::get('/detailcafe', [UserController::class, 'detail']);
Route::get('detail2', [UserController::class, 'detaill']);
Route::get('detail3', [UserController::class, 'detailll']);
Route::get('/search', [UserController::class, 'cari']);
Route::get('/tentang', [UserController::class, 'about']);
Route::get('homeadmin', [UserController::class, 'tampilan']);
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detailcafe', [UserController::class, 'detail'])->name('cafe.detail');
Route::post('/detailcafe', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('admin/cafe', CafeController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/cafe', [CafeController::class, 'index'])->name('cafe.index');
    Route::get('/cafe/create', [CafeController::class, 'create'])->name('cafe.create');
    Route::post('/cafe', [CafeController::class, 'store'])->name('cafe.store');
    Route::get('/cafe/{id}/edit', [CafeController::class, 'edit'])->name('cafe.edit');
    Route::put('/cafe/{id}', [CafeController::class, 'update'])->name('cafe.update');
    Route::delete('/cafe/{id}', [CafeController::class, 'destroy'])->name('cafe.destroy');
});

