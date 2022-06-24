<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/home',[PagesController::class,'home'])->name('home');;
Route::get('/service',[PagesController::class,'service'])->name('service');;
Route::get('/OurTeams',[PagesController::class,'OurTeams'])->name('OurTeams');;
Route::get('/AboutUs',[PagesController::class,'AboutUs'])->name('AboutUs');;
Route::get('/ContactUs',[PagesController::class,'ContactUs'])->name('ContactUs');;