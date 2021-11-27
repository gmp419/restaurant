<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/users', [AdminController::class, 'user'])->name('users');
Route::get('/deleteusers/{id}', [AdminController::class, 'deleteuser'])->name('deleteusers');

Route::get('/foodmenu', [AdminController::class, 'foodmenu'])->name('foodmenu');
Route::post('/uploadfood', [AdminController::class, 'uploadfood'])->name('uploadfood');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
