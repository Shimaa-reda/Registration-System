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
Route::get('/user-register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('incorrectCode');
});
Route::get('/Welcome-user', function () {
    return view('userWelcome');
})->name('/Welcome-user');

Route::get('/login-code', function () {
    return view('login');
})->name('login-code');



Route::post('/register-code', [UserController::class, 'store'])->name('user.register-code');
Route::post('/Welcome-user', [UserController::class, 'checkCode'])->name('user.Welcome-user');

