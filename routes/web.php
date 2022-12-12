<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommunityController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::view('/social', 'social')->name('social');

Route::get('/communities', [CommunityController::class, 'index'])->name('communities');

// También se puede hacer de esta manera si no hay lógica antes de cargar la vista
// Route::view('/', 'welcome');
