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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NotificationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/notifications', function () {
    return view('pages.notifications');
});

Route::get('/profile/details', function () {
    return view('profile.details');
});

// Routes pour les services

// Routes pour le chat
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/messages/{id}', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');
    Route::post('/chat/messages', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/chat/send-request', [ChatController::class, 'sendRequest'])->name('chat.sendRequest');
        Route::post('/chat/accept-request/{id}', [ChatController::class, 'acceptRequest'])->name('chat.acceptRequest');
        Route::get('/chats', [ChatController::class, 'getChats'])->name('chats.index');


    Route::get('dashboard/client', [DashboardController::class, 'showArtisan'])->name('dashboard.client');
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

     Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('profile.settings');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/messages/{user}', [MessageController::class, 'fetchMessages']);
Route::post('/messages', [MessageController::class, 'sendMessage']);

});
// routes/web.php
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::post('/request-service', [DashboardController::class, 'requestService'])->name('request-service');

Route::post('/sendSms', [NotificationController::class, 'sendNotification'])->name('send.sms');
Route::view('/send-sms-form', 'sendSms');


Route::get('/services_all', [ServiceController::class, 'allServices'])->name('services_all')->middleware('auth');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::post('/verify-id', [UserController::class, 'verifyId'])->name('verify.id');
// routes/web.php

Route::delete('/delete-account', [UserController::class, 'destroy'])->name('delete.account');


// Dans votre fichier de routes web (web.php)
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store')->middleware('auth');

Route::get('lang/{lang}', function ($lang) {
    App::setLocale($lang);
    session()->put('locale', $lang);
    return redirect()->back();
})->name('lang.switch');
// Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');

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

Route::post('/change-password', [UserController::class, 'changePassword'])->name('password.change');
Route::post('/enable-twofactor', [UserController::class, 'enableTwoFactor'])->name('twofactor.enable');

Route::get('/profile/settings', [SessionController::class, 'index'])->name('profile.settings');
Route::delete('/sessions/{token}', [SessionController::class, 'revoke'])->name('sessions.revoke');



// routes/web.php


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
