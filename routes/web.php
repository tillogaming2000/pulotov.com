<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class,'index'])->name('index');
Route::get('/portfolio',[PublicController::class,'portfolio'])->name('portfolio');
Route::get('/contact',[PublicController::class,'contact'])->name('contact');
Route::get('/about',[PublicController::class,'about'])->name('about');
Route::get('/blog/{id}',[PublicController::class,'blog'])->name('blog');
Route::get('/blogs',[PublicController::class,'blogs'])->name('blogs');



