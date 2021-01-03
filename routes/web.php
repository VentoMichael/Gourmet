<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExposantController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SaleController;
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
Route::get('/',
    [DashboardController::class, 'index'])->template(\App\Nova\Templates\Home::class)->name('dashboard.index');

Route::get('/exposants',
    [ExposantController::class, 'index'])->template(\App\Nova\Templates\Exposant::class)->name('exposants.index');
Route::get('/exposants/create',
    [ExposantController::class, 'create'])->template(\App\Nova\Templates\Exposant::class)->name('exposants.create');
Route::get('/exposants/{exposant}', [ExposantController::class, 'show'])->name('exposants.show');


Route::get('/gallery',
    [GalleryController::class, 'index'])->template(\App\Nova\Templates\Gallerie::class)->name('gallery.index');

Route::get('/restaurant',
    [RestaurantController::class, 'index'])->template(\App\Nova\Templates\Restaurant::class)->name('restaurant.index');

Route::get('/about',
    [AboutController::class, 'index'])->template(\App\Nova\Templates\About::class)->name('about.index');



//Route::post('/contact', [ContactController::class, 'store']);

//Route::get('/contact/create',
    //[ContactController::class, 'create'])->template(\App\Nova\Templates\Contact::class)->name('contact.create');

Route::get('/contact', [ContactController::class, 'create'])->template(\App\Nova\Templates\Contact::class)->name('contact.create');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/tickets',
    [SaleController::class, 'index'])->template(\App\Nova\Templates\Ticket::class)->name('tickets.index');
