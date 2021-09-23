<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'init']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/tickets', [App\Http\Controllers\TicketsController::class, 'index'])->name('tickets');
Route::get('/tickets/ticketCancel', [App\Http\Controllers\TicketsController::class, 'ticketCancel']);

Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal');
Route::get('/personal/create', [App\Http\Controllers\PersonalController::class, 'create'])->name('personalCreate');
Route::get('/personal/new', [App\Http\Controllers\PersonalController::class, 'new']);
Route::get('/personal/Edit/{position}', [App\Http\Controllers\PersonalController::class, 'edit']);
Route::get('/personal/Delete/{position}', [App\Http\Controllers\PersonalController::class, 'delete']);
Route::get('/personal/change', [App\Http\Controllers\PersonalController::class, 'change']);

Route::get('/station', [App\Http\Controllers\StationController::class, 'index'])->name('station');
Route::get('/station/create', [App\Http\Controllers\StationController::class, 'create'])->name('stationCreate');
Route::get('/station/new', [App\Http\Controllers\StationController::class, 'new']);
Route::get('/station/Edit/{position}', [App\Http\Controllers\StationController::class, 'edit']);
Route::get('/station/Delete/{position}', [App\Http\Controllers\StationController::class, 'delete']);
Route::get('/station/change', [App\Http\Controllers\StationController::class, 'change']);

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categoryCreate');
Route::get('/category/new', [App\Http\Controllers\CategoryController::class, 'new']);
Route::get('/category/Edit/{position}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::get('/category/Delete/{position}', [App\Http\Controllers\CategoryController::class, 'delete']);
Route::get('/category/change', [App\Http\Controllers\CategoryController::class, 'change']);

Route::get('/violation', [App\Http\Controllers\ViolationController::class, 'index'])->name('violation');
Route::get('/violation/create', [App\Http\Controllers\ViolationController::class, 'create'])->name('violationCreate');
Route::get('/violation/new', [App\Http\Controllers\ViolationController::class, 'new']);
Route::get('/violation/Edit/{position}', [App\Http\Controllers\ViolationController::class, 'edit']);
Route::get('/violation/Delete/{position}', [App\Http\Controllers\ViolationController::class, 'delete']);
Route::get('/violation/change', [App\Http\Controllers\ViolationController::class, 'change']);