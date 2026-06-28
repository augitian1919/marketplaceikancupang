<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CupangController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;

// Auth Routes
Route::get('/login', [CupangController::class, 'showLogin'])->name('login');
Route::post('/login', [CupangController::class, 'login'])->name('login.post');
Route::post('/register', [CupangController::class, 'register'])->name('register.post');
Route::post('/logout', [CupangController::class, 'logout'])->name('logout');

// GOOGLE LOGIN
Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// Public Routes
Route::get('/', [CupangController::class, 'home'])->name('home');
Route::get('/home', [CupangController::class, 'home'])->name('home');

// Protected Routes
Route::middleware(['firebase.auth'])->group(function () {
    Route::get('/dashboard', [CupangController::class, 'dashboard'])->name('dashboard');
    Route::get('/products/create', [CupangController::class, 'create'])->name('products.create');
    Route::post('/products', [CupangController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [CupangController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [CupangController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [CupangController::class, 'destroy'])->name('products.destroy');
    
    // --- KOTAK MASUK (pilih salah satu controller) ---
    Route::get('/inbox', [MessageController::class, 'inbox'])->name('inbox');
    Route::get('/inbox/{id}', [MessageController::class, 'show'])->name('inbox.show');
    Route::delete('/inbox/{id}', [MessageController::class, 'destroy'])->name('inbox.destroy');

    // --- PROFIL ---
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    // --- KIRIM PESAN ---
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/api/messages/recent', [MessageController::class, 'recent'])->name('messages.recent');
});