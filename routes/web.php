<?php

use App\Http\Controllers\GoogleAuthController;
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 
Route::get('/googlelogin',[GoogleAuthController::class,'redirect'])->name('google-auth');
 
Route::get('auth/google/callback',[GoogleAuthController::class,'callback']);

Route::get('/gitlogin',[GoogleAuthController::class,'gitredirect'])->name('git-auth');
 
Route::get('auth/github/callback',[GoogleAuthController::class,'gitcallback']);

Route::get('/facelogin',[GoogleAuthController::class,'faceredirect'])->name('face-auth');
 
Route::get('auth/facebook/callback',[GoogleAuthController::class,'facecallback']);