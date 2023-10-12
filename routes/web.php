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

// Route::get('/', 'BlogController')->name('home');
// Route::get('/posts', 'PostsController')->name('posts');



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
})->name('edit_acc');
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
})->name('edit_blog');
Route::get('/post', function () {
    return view('post');
})->name('post');


Route::get('/article', function () {
    return view('article');
})->name ('article');

Route::get ('/display_posts', [BlogController::class, 'feed']);//route für entwicklung von Francisco
Route::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco

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

//Route::put('/posts/{post}')->name('posts.update');
Route::get('/posts',function(){
    return view('edit_blog');
});

require __DIR__.'/auth.php';
