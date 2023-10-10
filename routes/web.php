<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/edit_acc', function () {
    return view('edit_acc');
});
Route::get('/new_blog', function () {
    return view('new_blog')->name('new_blog');
});
Route::get('/edit_blog', function () {
    return view('edit_blog')->name('edit_blog');
});
Route::get('/post', function () {
    return view('post');
});
Route ::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco
/*
Route::get('/display_posts', function () {
    return view('displayPosts');
});
*/

Route::get ('/display_posts', [BlogController::class, 'feed']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
