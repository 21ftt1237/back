<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HeaderController;


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
    return view('welcome');
});

Route::get('driverdash', function () {
    return view('driverdash');
})->name('driverdash');

Route::get('driver-login', function () {
    return view('driver-login');
})->name('driver-login');

Route::get('driverRegis', function () {
    return view('driverRegis');
})->name('driverRegis');

Route::get('/register', [DriverController::class, 'showRegistrationForm'])->name('driver.register');
    Route::post('/register', [DriverController::class, 'register']);

    // Driver Login Routes
    Route::get('/login', [DriverController::class, 'showLoginForm'])->name('driver.login');
    Route::post('/login', [DriverController::class, 'login']);

    // Driver Logout Route
    Route::post('/logout', [DriverController::class, 'logout'])->name('driver.logout');

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

Route::get('searchFilter', function () {
    return view('searchFilter');
})->name('searchFilter');

Route::get('avenue', function () {
    return view('avenue');
})->name('avenue');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

