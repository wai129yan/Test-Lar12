<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/todos',[TodoController::class,'index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');
Route::post('/todos',[TodoController::class,'store'])->name('todos.store');













Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('errors.404');
});


