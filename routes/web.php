<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/todos',[TodoController::class,'index'])->name('todos.index');
// Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');
// Route::post('/todos',[TodoController::class,'store'])->name('todos.store');
// Route::get('/todos/{todo}/edit',[TodoController::class,'edit'])->name('todos.edit');
// Route::put('/todos/{todo}',[TodoController::class,'update'])->name('todos.update');
// Route::delete('/todos/{todo}',[TodoController::class,'destroy'])->name('todos.destroy');

/* Todo */
Route::resource('todos',TodoController::class);
/* Category */
Route::resource('categories',CategoryController::class);
/* Post */
Route::resource('posts',PostController::class);




/* Testing */
// Route::get('/test', function () {
//     $user = User::find(1);
//     // return $user->posts;
//     $category = Category::find(1);
//     return $category->posts;
//     // return $user->posts->where('category_id',1);
// });


//RESTFul
//graphQL
//trpc










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