<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('registerForm');
// route with middelware 
Route::middleware(['auth'])->group(function () {

    Route::get('/todo', function () {
        return view(view: 'todo');
    })->name('todoForm');

});



Route::post('/register',[LoginController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('loginform');