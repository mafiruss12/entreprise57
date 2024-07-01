<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     if (Auth::check()) {
//         return redirect()->route('dashboard');
//     }
//     return view('welcome');
// });

// Routes pour les services
Route::get('/services', [ServiceController::class, 'index'])->name('services')->middleware('auth');

// Routes pour le chat
Route::middleware(['auth'])->group(function () {
    Route::get('/chat/{artisan}', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
});

// Route pour le tableau de bord
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Configuration des routes pour l'authentification et l'inscription
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Configuration des routes pour la réinitialisation de mot de passe
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Route pour le formulaire de demande de service
Route::post('/service-request/store', [ServiceRequestController::class, 'store'])->name('service-request.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes pour le profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
// routes/web.php

Route::get('/chat', [ChatController::class, 'index'])->name('chat')->middleware('auth');
