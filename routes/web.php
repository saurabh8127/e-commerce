<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('userlogin');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/add-user',[RegisterController::class,'addUser'])->name('addUser');


// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::get('/dasboard', function () {
//     return view('pages.home');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
