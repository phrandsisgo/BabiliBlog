<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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


Route::get('/create_post', [BlogController::class, 'create_post'])->name('create_post');
Route::post('/create_post', [BlogController::class, 'store_post'])->name('create_post.store');



Route ::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco

Route::get('/create_comment', function () {
    return view('create_comment');
})->name('create_comment');

Route::post('/new_comment/{id}', [BlogController::class, 'new_comment'])
    ->name('new_comment'); //Methode zum Speichern von Kommentaren von Cyrill



Route::get ('/display_posts', [BlogController::class, 'feed'])->name ('newest'); // route für entwicklung von Francisco

Route::get ('/display_users/{id}', [ProfileController::class, 'showProfile'])->name('user_profile'); // route für entwicklung von Luis

Route::post ('/upload_img', [ProfileController::class, 'uploadImg'])->name('upload_img'); // route für entwicklung von Luis

Route::get('/alex_g', function () {
    return view('welcome');
})->name ('willkommen');

Route::get('/article', function () {
    return view('article');
})->name ('article');

Route::get ('/display_posts2', [BlogController::class, 'feed2']);//route für entwicklung von Alex

Route::get('/post_bearbeiten/{id}', [BlogController::class, 'edit_post']);//route für entwicklung von Francisco
Route::get('/kommentar_bearbeiten/{id}', [BlogController::class, 'edit_comment']);//route für entwicklung von Francisco

Route::post('/post_update/{id}', [BlogController::class, 'post_update'])
    ->middleware(['check_post_author'])
    ->name('post_update');//endgültige Route von Francisco

Route::post('/update-comment/{id}', [BlogController::class, 'update_comment'])
    ->middleware(['check_comment_author'])
    ->name('kommentar_bearbeiten');//endgültige Route von Francisco

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');
