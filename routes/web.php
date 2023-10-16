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

Route::get('/', function () {
    return view('welcome');
});

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

require __DIR__.'/auth.php';