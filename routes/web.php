<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');

 
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

Route::resource('/post', 'App\Http\Controllers\PostsController');

Route::get('/post', [App\Http\Controllers\PostsController::class, 'index'])->name('/post');

Route::get('/post', [App\Http\Controllers\PostsController::class, 'all_data'])->name('/post');




