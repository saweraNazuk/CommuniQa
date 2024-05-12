<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserfriendController;
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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
});

Route::get('/view_blog', [PostController::class, 'view_blog']);
Route::get('/myposts', [PostController::class, 'myposts']);
Route::get('/myfriends', [UserfriendController::class, 'myfriends']);

Route::get('search_data', [PostController::class, 'search_data']);
Route::get('search_user', [PostController::class, 'search_user']);
// Route::get('/view_blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog_details/{id}', [PostController::class,'blog_details']);

Route::get('/googlelogin',[GoogleAuthController::class,'redirect'])->name('google-auth');
 
Route::get('auth/google/callback',[GoogleAuthController::class,'callback']);

Route::get('/gitlogin',[GoogleAuthController::class,'gitredirect'])->name('git-auth');
 
Route::get('auth/github/callback',[GoogleAuthController::class,'gitcallback']);

Route::get('/facelogin',[GoogleAuthController::class,'faceredirect'])->name('face-auth');
 
Route::get('auth/facebook/callback',[GoogleAuthController::class,'facecallback']);

Route::get('/view_privacy', [PostController::class, 'view_privacy']);
Route::get('/view_about', [PostController::class, 'view_about']);
Route::get('/view_contact', [PostController::class, 'view_contact']);

Route::get('/deleterequest/{id}', [UserfriendController::class, 'deleterequest']);
Route::get('/sendrequest/{id}', [UserfriendController::class, 'sendrequest']);