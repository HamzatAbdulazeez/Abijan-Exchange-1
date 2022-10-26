<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buy-and-sell', function () {
    return view('buy-and-sell');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/affiliate', function () {
    return view('affiliate');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\HomePageController::class, 'post_register'])->name('post.register');
Route::get('/verify/account/{email}', [App\Http\Controllers\HomePageController::class, 'verify_account'])->name('verify.account');
Route::post('/email/verify/resend/{email}', [App\Http\Controllers\HomePageController::class, 'email_verify_resend'])->name('email.verify.resend');
Route::post('/email/confirm/{token}', [App\Http\Controllers\HomePageController::class, 'registerConfirm'])->name('email.confirmation');
Route::get('/login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');
Route::post('/user/login', [App\Http\Controllers\HomePageController::class, 'user_login'])->name('user.login');
Route::get('/forget', [App\Http\Controllers\HomePageController::class, 'forget'])->name('forget');
Route::post('/password/forget',  [App\Http\Controllers\HomePageController::class, 'forget_password'])->name('user.forget.password');
Route::get('/reset/password/email', [App\Http\Controllers\HomePageController::class, 'password_reset_email'])->name('user.reset.password');
Route::post('update/password/reset/', [App\Http\Controllers\HomePageController::class, 'reset_password'])->name('user.update.password');


Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// User
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dashboard')->group(function () {
    Route::get('/naira', [App\Http\Controllers\HomeController::class, 'naira'])->name('naira');
    Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
    Route::get('/transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction');
    Route::get('/buynsell', [App\Http\Controllers\HomeController::class, 'buynsell'])->name('buynsell');
    // Route::get('/kyc', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc');
    // Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    // Route::get('/referral', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
});