<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;



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

//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth','verified'])->name('dashboard');

// Authenticate login
Auth::routes(['verify' => true, 'name' => 'auth.', 'password.reset' => 'password.reset']);

// Dashboard route for regular users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.user');

// Dashboard route for admins
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.auth.adminDashboard');
    })->name('dashboard.admin');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('test', function () {
    return view('test');
})->name('test');

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

Route::get('order_details', function () {
    return view('My order.order_details');
})->name('order_details');

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

Route::get('emails', function () {
    return view('emails');
})->name('emails');


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


Route::get('profilev', [ProfileController::class, 'showCoupon'])->name('profilev');

Route::post('/redeem-coupon', [ProfileController::class, 'redeemCoupon'])->name('redeemCoupon');

Route::post('profilev', [ProfileController::class, 'profupdate'])->name('updateProfile');

Route::get('coupon', [ProfileController::class, 'showLoyal'])->name('coupon');

Route::get('store2', [ProductController::class, 'yes']);

// Route::get('netcom', [ProductController::class, 'index'])->name('netcom');

// Route::get('netcom', [ProductController::class, 'cart'])->name('netcom');

// Route::get('netcom', [ProductController::class, 'cart'])->name('netcom');

// Route::get('netcom/products', [ProductController::class, 'index'])->name('netcom.products');

//Store

Route::get('gamecentral', [ProductController::class, 'indexGameCentral'])->name('gamecentral');

Route::get('digital', [ProductController::class, 'indexDigital'])->name('digital');

Route::get('avenue', [ProductController::class, 'indexAvenue'])->name('avenue');

Route::get('Nimanja', [ProductController::class, 'indexNimanja'])->name('Nimanja');

Route::get('Guardian', [ProductController::class, 'indexGuardian'])->name('Guardian');

Route::get('netcom', [ProductController::class, 'index'])->name('netcom.products');


//Review

Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit.review');

Route::post('/submit-review/{store_id}', [ReviewController::class, 'submitReview'])->name('submit.review');

Route::get('/get-reviews/{store_id}', [ReviewController::class, 'getReviews']);


//Cart

Route::post('/cart/add/{product}', [ProductController::class, 'addToCart'])->name('cart.add');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('checkout', [CartController::class, 'indexCheckout'])->name('checkout');

Route::post('/increase-quantity/{product}', [CartController::class, 'increaseQuantity'])->name('increaseQuantity');

Route::post('/decrease-quantity/{product}', [CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');


//Wishlist

Route::post('/wishlist/add/{product}', [ProductController::class, 'addToWishlist'])->name('wishlist.add');

Route::post('/wishlist/remove/{product}', [ProductController::class, 'removeFromWishlist'])->name('wishlist.remove');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


//Order

Route::post('/update-coupon-point', [OrderController::class, 'updateCouponPoint'])->name('update.coupon.point');

Route::post('/place-order', [OrderController::class, 'placeOrder']);

Route::get('/order', [OrderController::class,'showOrderList'])->name('order.show');

Route::get('/order-details/{created_at}', [OrderController::class, 'showOrderDetails'])->name('order.details');

Route::get('/order-list/{orderStatus}', [OrderController::class, 'showOrderList']);

//ETC

Route::get('/email', [EmailController::class, 'index']);

// Route::post('/email/send', [EmailController::class, sendEmail'])->name('send.email');

//ADMIN


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/adminDashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //login and logout
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});



require __DIR__.'/auth.php';

