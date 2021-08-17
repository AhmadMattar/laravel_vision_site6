<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResturantController;

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
Route::prefix('resturant')->group(function(){
    Route::get('',[ResturantController::class,'index'])->name('index');
    Route::get('about',[ResturantController::class,'about'])->name('about');
    Route::get('menu',[ResturantController::class,'menu'])->name('menu');
    Route::get('specials',[ResturantController::class,'specials'])->name('specials');
    Route::get('events',[ResturantController::class,'events'])->name('events');
    Route::get('chefs',[ResturantController::class,'chefs'])->name('chefs');
    Route::get('gallery',[ResturantController::class,'gallery'])->name('gallery');
    Route::get('contact',[ResturantController::class,'contact'])->name('contact');
    Route::post('contact',[ResturantController::class,'contactSubmit'])->name('contactSubmit');
    Route::get('bookTable',[ResturantController::class,'bookTable'])->name('bookTable');
    Route::post('bookTable',[ResturantController::class,'bookTableSubmit'])->name('bookTableSubmit');
});
Route::get('/', function () {
    return view('welcome');
});
