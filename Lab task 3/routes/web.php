<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\registrationController;

Route::get('/', function () {
    return view('home');
});
Route::get('/a', function () {
    return view('adminlogin');
});
Route::get('/login',[loginController::class,'Create'])->name('login');
Route::post('/login',[loginController::class,'createSubmit'])->name('login');

Route::get('/adminlogin',[loginController::class,'admin'])->name('adminlogin');
Route::post('/adminlogin',[loginController::class,'createSubmit'])->name('adminlogin');

Route::get('/contact',[contactController::class,'create'])->name('contact');
Route::post('/contact',[contactController::class,'createSubmit'])->name('contact');

Route::get('/registration',[registrationController::class,'create'])->name('registration');
Route::post('/registration',[registrationController::class,'createSubmit'])->name('registration');
Route::get('/login/home', [loginController::class,'home'])->name('home')->middleware('loginchk');

