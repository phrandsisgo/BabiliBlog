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
   
    // My Blogs:
    Route::get('/my_blogs', [BlogController::class, 'myBlogs'])->name('my_blogs');
    Route::get('/my_blogs/{category}', [BlogController::class, 'myBlogsByCategory'])->name('my_blogs.category');
    Route::get('/edit_blog/{id}', [BlogController::class, 'editBlogPost'])->name('edit_blog');
    Route::post('/update_blog/{id}', [BlogController::class, 'updateBlogPost'])->name('update_blog');
    Route::post('/delete_blog/{id}', [BlogController::class, 'deleteBlogPost'])->name('delete_blog');
    
    // New Blog:
    Route::get('/new_blog', [BlogController::class, 'createBlogPage'])->name('new_blog');
    Route::post('/new_blog', [BlogController::class, 'storeBlogPost'])->name('new_blog.store');
    
    // My Account:
    Route::get('/my_acc', [BlogController::class, 'myAcc'])->name('my_acc');
    Route::get('/edit_acc/{id}', [BlogController::class, 'editAccPost'])->name('edit_acc');
    Route::post('/update_acc/{id}', [BlogController::class, 'updateAccPost'])->name('update_acc');
    Route::post('/delete_acc/{id}', [BlogController::class, 'deleteAccPost'])->name('delete_acc');
    
    // New Account:
    Route::get('/register', [AccountController::class, 'registerPage'])->name('register');
    Route::post('/register', [AccountController::class, 'storeAcc'])->name('register.store');
    
    // Blogs/Feed
    Route::get('/post/{id}', [BlogController::class, 'viewPost'])->name('view_post');
    Route::get('/post', [BlogController::class, 'viewPosts'])->name('posts');
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