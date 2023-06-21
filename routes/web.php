<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;


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


Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('register', function () {
    return view('register');
});

Route::post('template', function () {
    return view('template');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('home', function () {
    return view('home');
});

Route::post('auth',[UserController::class,'auth']);
Route::post('register',[UserController::class,'register']);
Route::post('register/create',[UserController::class,'create']);

Route::get('profil',[ProfilController::class,'show']);
Route::get('profil/add',[ProfilController::class,'add']);
Route::post('profil/create',[ProfilController::class,'create']);

Route::get('portofolio',[PortofolioController::class,'show']);
Route::get('portofolio/add',[PortofolioController::class,'add']);
Route::post('portofolio/create',[PortofolioController::class,'create']);
Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);


Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/edit/{id}',[ContactController::class,'edit']);
Route::post('contact/update/{id}',[ContactController::class,'update']);
Route::get('contact/hapus/{id}',[ContactController::class,'hapus']);

Route::get('home',[HomeController::class,'show']);
// Route::get('portofolio',[HomeController::class,'portofolio']);
