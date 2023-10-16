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
})->name ('welcome');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/register', function () {
    return view('register');
})->name ('register');
Route::get('/edit_acc', function () {
    return view('edit_acc');
});
Route::get('/new_blog', function () {
    return view('new_blog')->name('new_blog');
});
Route::get('/edit_blog', function () {
    return view('edit_blog')->name('edit_blog');
})->name('edit_acc');
Route::get('/new_blog', function () {
    return view('new_blog');
})->name ('new_blog');
Route::get('/edit_blog', function () {
    return view('edit_blog');
})->name ('edit_blog');
Route::get('/post', function () {
    return view('post');
})->name ('post');

Route ::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco

Route::get ('/display_posts', [BlogController::class, 'feed']);//route für entwicklung von Francisco
Route::get('/post_bearbeiten/{id}', [BlogController::class, 'edit_post']);//route für entwicklung von Francisco
Route::get('/kommentar_bearbeiten/{id}', [BlogController::class, 'edit_comment']);//route für entwicklung von Francisco

Route::post('/post_update/{id}', [BlogController::class, 'post_update'])
    ->middleware(['check_post_author'])
    ->name('post_update');//endgültige Route von Francisco

Route::post('/update-comment/{id}', [BlogController::class, 'update_comment'])
    //->middleware(['check_comment_author'])
    ->name('kommentar_bearbeiten');//endgültige Route von Francisco

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
