<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\DepanController;

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
Route::get('/', 'DepanController@index');
Route::get('/berita/{id}', 'DepanController@show')->name('frontend.show');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/berita', function () {
    return view('frontend.berita');
})->name('frontend.berita');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::middleware('auth')->group(function() {
    Route::resource('basic', BasicController::class);
    // Route::resource('category', CategoryController::class);
    Route::resource('/posts', PostController::class);
    
    
});
Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/categories', [CategoryController::class, 'index']);
    // Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']);
    // Route::get('/categories/edit/{category}', [CategoryController::class, 'edit']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);
    Route::get('/categories/delete/{category_id}', [CategoryController::class, 'destroy']);
});

// Route::get('post/destroy/{id}', 'CategoryController@destroy');
// Route::resource('berita', BeritaController::class);

// Route::middleware(PostController::class)->group(function () {
//         Route::get('/posts', 'index');
//         Route::get('/posts/create', 'create');
//         Route::post('/posts', 'store');
//         Route::get('/posts/edit/{post}', 'edit');
//         Route::put('/posts/{post}', 'update');
//         Route::get('/posts/delete/{post_id}', 'destroy');
//     });