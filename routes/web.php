<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChefsController;

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
Route::get('/fooditems', [AdminController::class, 'fooditems'])->name('fooditems');
Route::get('/deletefood/{id}', [AdminController::class, 'deletefood'])->name('deletefood');
Route::get('/updatefood/{id}', [AdminController::class, 'updatefood'])->name('updatefood');
Route::post('/updatefooditem/{id}', [AdminController::class, 'updatefooditem'])->name('updatefooditem');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/addReservation', [ReservationController::class, 'store'])->name('addReservation');

Route::post('/addChefs', [ChefsController::class, 'store'])->name('addChefs');
Route::get('/chefs', [ChefsController::class, 'index'])->name('chefs');
Route::get('/deleteChef/{id}', [ChefsController::class, 'destroy'])->name('deleteChef');
Route::post('/updateChef/{id}', [ChefsController::class, 'update'])->name('updateChef');
Route::get('/updateChefdetail/{id}', [ChefsController::class, 'updateChefdetail'])->name('updateChefdetail');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
