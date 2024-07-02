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
Route::get('/', function () {
    return view('welcome');
});

// Routes pour les services

// Routes pour le chat
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/messages/{id}', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');
    Route::post('/chat/messages', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/messages/{user}', [MessageController::class, 'fetchMessages']);
Route::post('/messages', [MessageController::class, 'sendMessage']);

});
// routes/web.php


Route::get('/services_all', [ServiceController::class, 'allServices'])->name('services_all')->middleware('auth');


// Dans votre fichier de routes web (web.php)
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store')->middleware('auth');


// Configuration des routes pour l'authentification et l'inscription
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('services', [ServiceController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Configuration des routes pour la réinitialisation de mot de passe
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Route pour le formulaire de demande de service

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes pour le profil



// routes/web.php


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
