<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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
    return view('dashboard');
});

Route::get('BruzoneLogin', function () {
    return view('BruzoneLogin');
})->name('BruzoneLogin');

Route::get('Bruzone_Sign_Up', function () {
    return view('Bruzone_Sign_Up');
})->name('Bruzone_Sign_Up');

Route::get('netcom', function () {
    return view('netcom');
})->name('netcom');

Route::get('AdminOrderHistory', function () {
    return view('AdminOrderHistory');
})->name('AdminOrderHistory');


Route::get('netcom', function () {
    return view('netcom');
})->name('netcom');


Route::get('order', function () {
    return view('My order.order');
})->name('order');

Route::get('Deli', function () {
    return view('Deli');
});

Route::get('Guardian', function () {
    return view('Guardian');
})->name('Guardian');

Route::get('store2', function () {
    return view('store2');
})->name('store2');

Route::get('searchFilter', function () {
    return view('searchFilter');
})->name('searchFilter');

Route::get('avenue', function () {
    return view('avenue');
})->name('avenue');

Route::get('des', function () {
    return view('des');
})->name('des');

Route::get('Nimanja', function () {
    return view('Nimanja');
})->name('Nimanja');

Route::get('digital', function () {
    return view('digital');
})->name('digital');

Route::get('BruZoneWishlist', function () {
    return view('Wishlist.BruZoneWishlist'); 
})->name('BruZoneWishlist');

Route::get('BruzoneFAQ', function () {
    return view('Help.BruzoneFAQ'); 
})->name('BruzoneFAQ');

Route::get('BruzoneEmail', function () {
    return view('Help.BruzoneEmail'); 
})->name('BruzoneEmail');

Route::get('storePlatform-SO', function () {
    return view('storePlatform-SO'); 
})->name('storePlatform-SO');

Route::get('AdminOrderHistory', function () {
    return view('AdminOrderHistory'); 
})->name('AdminOrderHistory');

Route::get('ChatboxAdmin', function () {
    return view('ChatboxAdmin'); 
})->name('ChatboxAdmin');

Route::get('BruZoneChatbox', function () {
    return view('Chatbox.BruZoneChatbox'); 
})->name('BruZoneChatbox');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('chat', function () {
    return view('chat');
})->name('chat');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('gamecentral', function () {
    return view('gamecentral');
})->name('gamecentral');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');


Route::get('profilev', [ProfileController::class, 'showProfile'])->name('profilev');

Route::post('/redeem-coupon', [ProfileController::class, 'redeemCoupon'])->name('redeemCoupon');

Route::post('profilev', [ProfileController::class, 'profupdate'])->name('updateProfile');

Route::get('coupon', [ProfileController::class, 'showLoyal'])->name('coupon');

Route::get('store2', [ProductController::class, 'yes']);

Route::get('netcom', [ProductController::class, 'index'])->name('netcom');


Route::post('/save-cart-items', [CartController::class, 'saveCartItems']);

Route::get('/order', [CartController::class, 'getCartItems'])->name('order');

require __DIR__.'/auth.php';
