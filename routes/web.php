<?php

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