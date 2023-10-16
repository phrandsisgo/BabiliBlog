<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route ::get('/show/{id}', [BlogController::class, 'show']);//route für EntwicklungsZwecke von Francisco


Route::get ('/display_posts', [BlogController::class, 'feed']); // route für entwicklung von Francisco

Route::get ('/show/{id}', [BlogController::class, 'show']); // route für entwicklung von Francisco

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
    //->middleware(['check_comment_author'])
    ->name('kommentar_bearbeiten');//endgültige Route von Francisco

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');
});
//hier kommen die Routen von Baris hin:

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    // My Posts:
    Route::get('/my_posts', [PostController::class, 'myPosts'])->name('my_posts');
    Route::get('/my_posts/{category}', [PostController::class, 'myPostsByCategory'])->name('my_posts.category');
    Route::get('/edit_post/{id}', [PostController::class, 'editPostPost'])->name('edit_post');
    Route::post('/update_post/{id}', [PostController::class, 'updatePostPost'])->name('update_post');
    Route::post('/delete_post/{id}', [PostController::class, 'deletePostPost'])->name('delete_post');
    
    // New Post:
    Route::get('/new_post', [PostController::class, 'createPostPage'])->name('new_post');
    Route::post('/new_post', [PostController::class, 'storePostPost'])->name('new_post.store');
    
    // My Account:
    Route::get('/my_acc', [PostController::class, 'myAcc'])->name('my_acc');
    Route::get('/edit_acc/{id}', [PostController::class, 'editAccPost'])->name('edit_acc');
    Route::post('/update_acc/{id}', [PostController::class, 'updateAccPost'])->name('update_acc');
    Route::post('/delete_acc/{id}', [PostController::class, 'deleteAccPost'])->name('delete_acc');
    
    // New Account:
    Route::get('/register', [AccountController::class, 'registerPage'])->name('register');
    Route::post('/register', [AccountController::class, 'storeAcc'])->name('register.store');
    
    // Posts/Feed
    Route::get('/post/{id}', [PostController::class, 'viewPost'])->name('view_post');
    Route::get('/post', [PostController::class, 'viewPosts'])->name('posts');
        //  Comments
    Route::get('/post/{id}/comments', [CommentController::class, 'viewComments'])->name('view_comments');
    Route::post('/post/{id}/comment', [CommentController::class, 'postComment'])->name('comment_post');
        // Likes
    Route::get('/post/{id}/likes', [LikeController::class, 'viewlikes'])->name('view_likes');
    Route::post('/post/{id}/like', [LikeController::class, 'postLike'])->name('like_post');
        // Dislikes
    Route::get('/post/{id}/dislikes', [LikeController::class, 'viewDislikes'])->name('view_dislikes');
    Route::post('/post/{id}/dislike', [LikeController::class, 'dislikePost'])->name('dislike_post');

});

//Route::put('/posts/{post}')->name('posts.update');
Route::get('/posts',function(){
    return view('edit_blog');
});

require __DIR__.'/auth.php';
