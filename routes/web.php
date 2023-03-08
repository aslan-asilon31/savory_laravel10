<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/cart_detail', function () {
    return view('payment.cart_detail');
});

Route::get('/cart_checkout', function () {
    return view('payment.cart_checkout');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/user', function () {
//     return view('user.index');
// });

Route::prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    // Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    // Route::put('update/{id}', [UserController::class, 'update'])->name('user.update');
    // Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
});

