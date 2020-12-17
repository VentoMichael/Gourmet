<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExposantController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SalesController;
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
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/exposants', [ExposantController::class, 'index'])->name('exposants.index');
Route::get('/exposants/add', [ExposantController::class, 'become'])->name('expoBecome.index');
Route::get('/exposants/a', [ExposantController::class, 'show'])->name('expoShow.index');


Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/tickets', [SalesController::class, 'index'])->name('tickets.index');
