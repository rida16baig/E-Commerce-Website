<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::post('/submit-login-form', [AuthController::class, 'submitLoginForm'])->name('submit.login.form');
Route::post('/submit-signup-form', [AuthController::class, 'submitSignupForm'])->name('submit.signup.form');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('customer')->name('customer.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('manage-users', [AdminController::class, 'manageUsers'])->name('manage-users');
    Route::get('edit/{id}', [AdminController::class, 'editUser'])->name('edit-user');
    Route::put('update-user/{id}', [AdminController::class, 'updateUser'])->name('update-user');
    Route::delete('delete-user/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');
});