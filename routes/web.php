<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;



Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'all'])->name('all.posts');
Route::get('/post/{id}', [PostController::class, 'show'])->name('show.post');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/post/comment/{id}', [PostController::class, 'comment'])->name('comment');
});

Route::middleware('guest')->group(function (){
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'loginProcess'])->name('login_process');

    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'registerProcess'])->name('register_process');

    Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
    Route::post('/forgot_password_process', [AuthController::class, 'forgotPasswordProcess'])->name('forgot_process_password');
});

Route::get('/contact_form', [IndexController::class, 'contactForm'])->name('contact_form');
Route::post('/contact_form_process', [IndexController::class, 'contactFormProcess'])->name('contact_form_process');
