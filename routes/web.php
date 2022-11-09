<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

//Route::get('/admin', [App\Http\Controllers\HomePageController::class, 'admin'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\HomePageController::class, 'post_admin_login'])->name('admin.post.login');
Route::get('/register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register')->middleware('CheckReferral');
/*Route::post('/register', [App\Http\Controllers\HomePageController::class, 'post_register'])->name('post.register');
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
    Route::get('/naira_deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
    Route::get('/buynsell', [App\Http\Controllers\HomeController::class, 'buynsell'])->name('buynsell');
    Route::get('/naira_transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction');
    Route::get('/sendbtn', [App\Http\Controllers\HomeController::class, 'sendbtn'])->name('sendbtn');
    Route::get('/wallet_receive', [App\Http\Controllers\HomeController::class, 'wallet_receive'])->name('wallet_receive');
    Route::get('/wallet_transactions', [App\Http\Controllers\HomeController::class, 'wallet_transactions'])->name('wallet_transactions');
    Route::get('/ethereum', [App\Http\Controllers\HomeController::class, 'ethereum'])->name('ethereum');
    Route::get('/receive_eth', [App\Http\Controllers\HomeController::class, 'receive_eth'])->name('receive_eth');
    Route::get('/referrals', [App\Http\Controllers\HomeController::class, 'referrals'])->name('referrals');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/question/update', [App\Http\Controllers\HomeController::class, 'updateQuesstion'])->middleware(['verified', 'auth'])->name('user.update.question');
    Route::post('/birth/update', [App\Http\Controllers\HomeController::class, 'updateBirth'])->middleware(['verified', 'auth'])->name('user.update.birth');
    Route::post('/gender/update', [App\Http\Controllers\HomeController::class, 'updateGender'])->middleware(['verified', 'auth'])->name('user.update.gender');
    Route::post('/password/update', [App\Http\Controllers\HomeController::class, 'updatePassword'])->middleware(['verified', 'auth'])->name('user.update.password');
    Route::post('/phone/update', [App\Http\Controllers\HomeController::class, 'updatePhone'])->middleware(['verified', 'auth'])->name('user.update.phone_no');
    Route::post('/username/update', [App\Http\Controllers\HomeController::class, 'updateUsername'])->middleware(['verified', 'auth'])->name('user.update.username');
    Route::post('/name/update', [App\Http\Controllers\HomeController::class, 'updateProfileName'])->middleware(['verified', 'auth'])->name('user.update.profile_name');
    Route::get('/mail/trash', [App\Http\Controllers\HomeController::class, 'Trash'])->middleware(['verified', 'auth'])->name('mailbox.trash');
    Route::get('/mail/sent', [App\Http\Controllers\HomeController::class, 'Sent'])->middleware(['verified', 'auth'])->name('mailbox.sent');
    Route::get('/mail/inbox', [App\Http\Controllers\HomeController::class, 'Inbox'])->middleware(['verified', 'auth'])->name('mailbox.inbox');
    Route::get('/mail/archive', [App\Http\Controllers\HomeController::class, 'Archive'])->middleware(['verified', 'auth'])->name('mailbox.archive');
    Route::post('/bvn/validate', [App\Http\Controllers\HomeController::class, 'validateBvn'])->middleware(['verified', 'auth'])->name('validateBvn');
    Route::post('/mail/send', [App\Http\Controllers\HomeController::class, 'sendMail'])->middleware(['verified', 'auth'])->name('send.mail');
    Route::post('/mail/delete', [App\Http\Controllers\HomeController::class, 'moveTrash'])->middleware(['verified', 'auth'])->name('mail.moveTrash');
    Route::post('/mail/deleteOne', [App\Http\Controllers\HomeController::class, 'deleteOne'])->middleware(['verified', 'auth'])->name('mail.deleteOne');
    Route::post('/mail/restoreMail', [App\Http\Controllers\HomeController::class, 'restoreMail'])->middleware(['verified', 'auth'])->name('mail.restoreMail');
    Route::post('/mail/achiveMail', [App\Http\Controllers\HomeController::class, 'achiveMail'])->middleware(['verified', 'auth'])->name('mail.achiveMail');
    Route::post('/mail/readMail', [App\Http\Controllers\HomeController::class, 'readMail'])->middleware(['verified', 'auth'])->name('mail.readMail');
    Route::post('/sendBtc', [App\Http\Controllers\BtcTransController::class, 'store'])->middleware(['verified', 'auth'])->name('btc.send');
    Route::post('/depositnaira', [App\Http\Controllers\NairaTransactionController::class, 'deposit'])->middleware(['verified', 'auth'])->name('naira.deposit');
    Route::post('/sendnaira', [App\Http\Controllers\NairaTransactionController::class, 'sendnaira'])->middleware(['verified', 'auth'])->name('naira.sendnaira');
    Route::post('/getInstructions', [App\Http\Controllers\HomeController::class, 'getInstructions'])->middleware(['verified', 'auth'])->name('getInstructions');
    Route::post('/quickbuy', [App\Http\Controllers\OrderController::class, 'store'])->middleware(['verified', 'auth'])->name('quickbuy');
    Route::post('/quicksell', [App\Http\Controllers\OrderController::class, 'quicksell'])->middleware(['verified', 'auth'])->name('quicksell');
    Route::post('/cancel_sell', [App\Http\Controllers\OrderController::class, 'cancel_sell'])->middleware(['verified', 'auth'])->name('cancel_sell');
    Route::post('/palertz_sell', [App\Http\Controllers\OrderController::class, 'palertz_sell'])->middleware(['verified', 'auth'])->name('palertz_sell');
    Route::get('/sendnotice', [App\Http\Controllers\OrderController::class, 'sendnotice'])->middleware(['verified', 'auth'])->name('sendnotice');
    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware(['verified', 'auth'])->name('orders');
    Route::get('/orderinfo', [App\Http\Controllers\OrderController::class, 'orderInfo'])->middleware(['verified', 'auth'])->name('orderInfo');
    Route::post('/changePhoto', [App\Http\Controllers\HomeController::class, 'changePhoto'])->middleware(['verified', 'auth'])->name('changePhoto');
   /*  Route::get('/typebirth', [App\Http\Controllers\HomeController::class, 'typebirth'])->name('typebirth');
    Route::get('/typequestion', [App\Http\Controllers\HomeController::class, 'typequestion'])->name('typequestion');
    Route::get('/typegender', [App\Http\Controllers\HomeController::class, 'typegender'])->name('typegender');
    Route::get('/typepassword', [App\Http\Controllers\HomeController::class, 'typepassword'])->name('typepassword'); */
    Route::get('/kyc', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc');
    //Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/referral', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
});

// Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/adminwelcome', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_welcome');
    Route::get('/withdraw_request', [App\Http\Controllers\AdminController::class, 'withdraw_request'])->name('Wrequest');
    Route::get('/deposit_request', [App\Http\Controllers\AdminController::class, 'deposit_request'])->name('Drequest');
    Route::get('/send_request', [App\Http\Controllers\AdminController::class, 'send_request'])->name('send_request');
    Route::get('/receive_request', [App\Http\Controllers\AdminController::class, 'receive_request'])->name('receive_request');
    Route::get('/swap_request', [App\Http\Controllers\AdminController::class, 'swap_request'])->name('swap_request');
    Route::get('/message-center', [App\Http\Controllers\AdminController::class, 'message_center'])->name('message_center');
    Route::get('/sent-mails', [App\Http\Controllers\AdminController::class, 'sent_mails'])->name('sent_mails');
    Route::get('/mailbox_trash', [App\Http\Controllers\AdminController::class, 'mailbox_trash'])->name('mailbox_trash');
    Route::get('/mailbox_archive', [App\Http\Controllers\AdminController::class, 'mailbox_archive'])->name('mailbox_archive');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'adminprofile'])->name('adminprofile');
    Route::get('/view_referral', [App\Http\Controllers\AdminController::class, 'view_referral'])->name('view_referral');
    Route::get('/buy_sell', [App\Http\Controllers\AdminController::class, 'buy_sell'])->name('buy_sell');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('settings');
    Route::get('/set_rate', [App\Http\Controllers\AdminController::class, 'setRate'])->name('set_rate');
    Route::get('/create_admin', [App\Http\Controllers\AdminController::class, 'createUser'])->name('create_admin');
    Route::post('/createAdmin', [App\Http\Controllers\AdminController::class, 'createAdminPost'])->name('createAdmin');
    Route::post('/updateName', [App\Http\Controllers\AdminController::class, 'UpdateName'])->name('admin.update.name');
    Route::post('/updatePassword', [App\Http\Controllers\AdminController::class, 'UpdatePassword'])->name('admin.update.password');
    Route::post('/SetRate', [App\Http\Controllers\AdminController::class, 'AddRate'])->name('SetRate');
    Route::post('/update_rate', [App\Http\Controllers\AdminController::class, 'updateRate'])->name('updateRate');
    Route::post('/delete_rate', [App\Http\Controllers\AdminController::class, 'deleteRate'])->name('delete.rate');
    Route::post('/updateSetting', [App\Http\Controllers\AdminController::class, 'UpdateSetting'])->name('settings.update');
    Route::post('/updateNairaDeposit', [App\Http\Controllers\NairaTransactionController::class, 'updateDepositNaira'])->middleware(['verified', 'auth'])->name('naira.updateDeposit');
    Route::post('/updateNairaWithdraw', [App\Http\Controllers\NairaTransactionController::class, 'updateWithdrawNaira'])->middleware(['verified', 'auth'])->name('naira.updateWithdraw');
    Route::post('/updateBTC', [App\Http\Controllers\BtcTransController::class, 'btcNaira'])->middleware(['verified', 'auth'])->name('btc.update');
    Route::post('/updateBuy', [App\Http\Controllers\OrderController::class, 'buyUpdate'])->middleware(['verified', 'auth'])->name('buy.update');
    Route::post('/InvoiceUpdate', [App\Http\Controllers\OrderController::class, 'InvoiceUpdate'])->middleware(['verified', 'auth'])->name('invoice.update');
    Route::post('/mail/readMail', [App\Http\Controllers\AdminController::class, 'readMail'])->middleware(['verified', 'auth'])->name('mail.readMail');
});
