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

//Route::get('/admin', [App\Http\Controllers\HomePageController::class, 'admin'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\HomePageController::class, 'post_admin_login'])->name('admin.post.login');
/* Route::get('/register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\HomePageController::class, 'post_register'])->name('post.register');
Route::get('/verify/account/{email}', [App\Http\Controllers\HomePageController::class, 'verify_account'])->name('verify.account');
Route::post('/email/verify/resend/{email}', [App\Http\Controllers\HomePageController::class, 'email_verify_resend'])->name('email.verify.resend');
Route::post('/email/confirm/{token}', [App\Http\Controllers\HomePageController::class, 'registerConfirm'])->name('email.confirmation');
Route::get('/login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');
Route::post('/user/login', [App\Http\Controllers\HomePageController::class, 'user_login'])->name('user.login');
Route::get('/forget', [App\Http\Controllers\HomePageController::class, 'forget'])->name('forget');
Route::post('/password/forget',  [App\Http\Controllers\HomePageController::class, 'forget_password'])->name('user.forget.password');
Route::get('/reset/password/email', [App\Http\Controllers\HomePageController::class, 'password_reset_email'])->name('user.reset.password');
Route::post('update/password/reset/', [App\Http\Controllers\HomePageController::class, 'reset_password'])->name('user.update.password'); */


/* Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout'); */

// User
Route::post('/dashboard/update', [App\Http\Controllers\HomeController::class, 'updateProfile'])->middleware(['verified', 'auth'])->name('user.update.profile');
Route::get('/dashboard/settings', [App\Http\Controllers\HomeController::class, 'settings'])->middleware(['verified', 'auth'])->name('settings.type.name');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['verified', 'auth', 'userprofile'])->name('home');
Route::prefix('dashboard')->middleware(['verified', 'auth', 'userprofile'])->group(function () {
    Route::get('/naira', [App\Http\Controllers\HomeController::class, 'naira'])->name('naira');
    Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
    Route::get('/buynsell', [App\Http\Controllers\HomeController::class, 'buynsell'])->name('buynsell');
    Route::get('/transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('edit_profile');
   /*  Route::get('/typebirth', [App\Http\Controllers\HomeController::class, 'typebirth'])->name('typebirth');
    Route::get('/typequestion', [App\Http\Controllers\HomeController::class, 'typequestion'])->name('typequestion');
    Route::get('/typegender', [App\Http\Controllers\HomeController::class, 'typegender'])->name('typegender');
    Route::get('/typepassword', [App\Http\Controllers\HomeController::class, 'typepassword'])->name('typepassword'); */
    Route::get('/kyc', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc');
    //Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/referral', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
});

// Admin
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/adminwelcome', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_welcome');
    Route::get('/withdraw_request', [App\Http\Controllers\AdminController::class, 'withdraw_request'])->name('Wrequest');
    Route::get('/deposit_request', [App\Http\Controllers\AdminController::class, 'deposit_request'])->name('Drequest');
    Route::get('/send_request', [App\Http\Controllers\AdminController::class, 'send_request'])->name('send_request');
    Route::get('/receive_request', [App\Http\Controllers\AdminController::class, 'receive_request'])->name('receive_request');
    Route::get('/swap_request', [App\Http\Controllers\AdminController::class, 'swap_request'])->name('swap_request');
    Route::get('/message-center', [App\Http\Controllers\AdminController::class, 'message_center'])->name('message_center');
    Route::get('/sent-mails', [App\Http\Controllers\AdminController::class, 'sent_mails'])->name('sent_mails');
    Route::get('/mailbox_trash', [App\Http\Controllers\AdminController::class, 'mailbox_trash'])->name('mailbox_trash');
    Route::get('/ mailbox_archive', [App\Http\Controllers\AdminController::class, ' mailbox_archive'])->name(' mailbox_archive');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'adminprofile'])->name('adminprofile');
    Route::get('/view_referral', [App\Http\Controllers\AdminController::class, 'view_referral'])->name('view_referral');
    Route::get('/buy_sell', [App\Http\Controllers\AdminController::class, 'buy_sell'])->name('buy_sell');
});
