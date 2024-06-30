<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceRequestController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('welcome');


Route::get('hello-world', function () {
    return view('hello-world');
});


Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');


use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services')->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('/chat/{artisan}', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
});

// Route::get('dashboard', function () {
//     return view('dashboard/index');
// });
//Configuration route login

Route::get('register', function () {
    return view('register/create');
});
//Configuration route login

Route::get('test-postgres', function () {
    try {
        DB::connection()->getPdo();
        return "Connexion à PostgreSQL établie avec succès.";
    } catch (\Exception $e) {
        return "Erreur de connexion à PostgreSQL : " . $e->getMessage();
    }
});

//Configuration route login

Route::get('register', function () {
    return view('register/create');
});
//Configuration route register

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

//Configuration route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('regis', function () {
    return view('register/regis');
});
//Configuration route form

Route::get('form', function () {
    return view('form');
});
//Configuration route reset account

Route::get('reset', function () {
    return view('auth/passwords/reset');
});
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::post('/service-request/store', [ServiceRequestController::class, 'store'])->name('service-request.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
