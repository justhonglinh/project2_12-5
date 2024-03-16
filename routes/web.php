<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//login

Route::get('/login' , [\App\Http\Controllers\AuthController::class,'viewLogin'])->name('login') ;
Route::post('/login' , [\App\Http\Controllers\AuthController::class,'login']) ;
Route::post('/logout' , [\App\Http\Controllers\AuthController::class,'logout'])->name('logout') ;

//home page
Route::get('/super_admin/home', function (){
    return view('super_admin.home') ;
})->middleware('auth')->name('super_admin.home') ;

Route::get('/admin/home', function () {
    return view('admin.home');
})->middleware('auth')->name('admin.home');

Route::get('/customer/home', function () {
    return view('customer.home');
})->name('customer.home');
