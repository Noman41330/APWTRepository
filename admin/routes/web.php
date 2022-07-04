<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\sellerController;
use App\Http\Middleware\adminMiddleWare;

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
//general
Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/registration',[PagesController::class,'registration'])->name('registration');
Route::post('/registration',[RegistrationController::class,'submit'])->name('submit');
//login
Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/loginSub',[LoginController::class,'loginsubmit'])->name('loginsubmit');
Route::get('/details',[LoginController::class,'list'])->name('details');
//logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//doctor
Route::get('/addDoctor',[PagesController::class,'addDoctor'])->name('addDoctor')->middleware('adminMiddleWare');
Route::post('/addDoctor',[doctorController::class,'submit'])->name('submit')->middleware('adminMiddleWare');
Route::get('/drdetails',[doctorController::class,'doctorsList'])->name('drdetails')->middleware('adminMiddleWare');
Route::get('/drdelete/{id}',[doctorController::class,'drDelete'])->name('drDelete')->middleware('adminMiddleWare');

Route::get('/editDr/{id}',[doctorController::class,'drEdit'])->name('editDr')->middleware('adminMiddleWare');
Route::post('/updateDr/{id}',[doctorController::class,'updateDr'])->name('updateDr')->middleware('adminMiddleWare');
Route::get('/accessibilty/{id}',[doctorController::class,'accessibilty'])->name('accessibilty')->middleware('adminMiddleWare');


Route::get('/dredit',[doctorController::class,'editDr'])->name('dredit')->middleware('adminMiddleWare');
//seller
Route::get('/addSeller',[PagesController::class,'addSeller'])->name('addSeller')->middleware('adminMiddleWare');
Route::post('/addSeller',[sellerController::class,'submit'])->name('submit')->middleware('adminMiddleWare');
Route::get('/sellerdetails',[sellerController::class,'sellersList'])->name('sellerdetails')->middleware('adminMiddleWare');
Route::get('/sellerdelete/{id}',[sellerController::class,'delete'])->name('delete')->middleware('adminMiddleWare');
Route::get('/editSeller/{id}',[sellerController::class,'sellerEdit'])->name('editSeller')->middleware('adminMiddleWare');
Route::post('/updateSeller/{id}',[sellerController::class,'updateSeller'])->name('updateSeller')->middleware('adminMiddleWare');

Route::get('/status/{id}',[sellerController::class,'status'])->name('status');
//drsearch
Route::get('/drSearch',[doctorController::class,'drSearch'])->name('drSearch');
//sellerSearch
Route::get('/sellerSearch',[sellerController::class,'sellerSearch'])->name('sellerSearch');