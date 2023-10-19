<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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



Route::get('/einloggen', function () {return view('einloggen');})->name('einloggen');
/*
Route::get('/', function () {
    return view('feed');
})->name ('welcome');*/
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

Route ::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco


// BY SCARRUS
Route::get('/myfeeds/{userId}', [BlogController::class, 'myFeeds'])->name('myfeeds');

Route::post('/welcome', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::post('/welcome', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');




Route::get ('/', [BlogController::class, 'feed'])->name ('newest'); 
Route::get ('/welcome', [BlogController::class, 'feed'])->name ('welcome'); 

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
//Route::get('/delete_comment/{id}', [BlogController::class, 'delete_comment']);//route für entwicklung von Francisco
Route::post('/deleteComment/{id}', [BlogController::class, 'delete_comment'])
    ->middleware(['check_comment_author'])
    ->name('delete_comment');

Route::post('/deletePost/{id}', [BlogController::class, 'delete_post'])
    ->middleware(['check_post_author'])
    ->name('delete_post');

Route::post('/post_update/{id}', [BlogController::class, 'post_update'])
    ->middleware(['check_post_author'])
    ->name('post_update');//endgültige Route von Francisco

Route::post('/update-comment/{id}', [BlogController::class, 'update_comment'])
    ->middleware(['check_comment_author'])
    ->name('kommentar_bearbeiten');
/*
Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');
*/
Route::get('/dashboard',[BlogController::class, 'feed'])->name ('newest');

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
