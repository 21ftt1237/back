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
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ComnetController;



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



 //   Route::get('AdminOrder', [OrderController::class, 'showAllOrderLists'])->name('AdminOrder');

 //   Route::post('/update-status', [OrderController::class, 'updateStatus']);

//Route::middleware(['auth', 'verified', 'admin'])->group(function () {
  //  Route::get('/Dashboard-adm', [OrderController::class, 'dashboardAdmin'])->name('dashboard.admin');
   // Route::get('/AdminOrder', [OrderController::class, 'showAllOrderLists'])->name('AdminOrder');
   // Route::post('/update-status', [OrderController::class, 'updateStatus']);
//});


//Admin Order

//Route::get('AdminOrder', [OrderController::class, 'showAllOrderLists'])->name('AdminOrder');

//Route::post('/update-status', [OrderController::class, 'updateStatus']);

//Route::get('/order-list/{orderStatus}', [OrderController::class, 'showOrderList']);


Route::get('/comnet', [ComnetController::class, 'indexComnet'])->name('comnet.comnet');
Route::get('/comnet/create', [ComnetController::class, 'create'])->name('comnet.create');
Route::post('/comnet/store', [ComnetController::class, 'store'])->name('comnet.store');


Route::get('/defender', [DefenderController::class, 'digitalShowAllProduct'])->name('defender.defender');
Route::get('/defender/create', [ComnetController::class, 'create'])->name('comnet.create');
Route::post('/defender/store', [ComnetController::class, 'store'])->name('comnet.store');
Route::get('/create', [ComnetController::class, 'create']);



//OWNER RELATED
Route::prefix('owner')->middleware([])->group(function () {    
    Route::get('/products', [ComnetController::class, 'comnetShowAllProduct'])->name('owner.comnet.comnet');
    Route::get('/products/create', [ComnetController::class, 'create'])->name('comnet.create');
  //  Route::post('/products/store', [ComnetController::class, 'store'])->name('comnet.store');
    Route::delete('/products/delete/{id}', [ComnetController::class, 'comnetDeleteProduct'])->name('owner.product.delete');
});



Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('product.update');






//ADMIN

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/Dashboard-adm', [AdminDashboardController::class, 'index'])
        ->name('dashboard.admin');

    Route::get('/Dashboard-adm/store-list', [StoreController::class, 'storeList']) 
        ->name('store.list');


    // Store-related routes
//    Route::prefix('stores')->group(function () {

 //       Route::get('/{store}', [StoreController::class, 'show'])
 //       ->name('store.show');

       Route::get('/', [App\Http\Controllers\StoreController::class, 'index'])->name('dashboard.admin.stores');
       Route::get('/netcom', [App\Http\Controllers\StoreController::class, 'index'])->name('store.index');
//        Route::get('/game-central', [StoreController::class, 'indexGameCentral'])->name('store.indexGameCentral');
//        Route::get('/wishlist', [StoreController::class, 'indexWishlist'])->name('store.indexWishlist');
//        Route::get('/digital', [StoreController::class, 'indexDigital'])->name('store.indexDigital');
//        Route::get('/avenue', [StoreController::class, 'indexAvenue'])->name('store.indexAvenue');
//        Route::get('/nimanja', [StoreController::class, 'indexNimanja'])->name('store.indexNimanja');
//        Route::get('/guardian', [StoreController::class, 'indexGuardian'])->name('store.indexGuardian');

//        Route::get('/create', [StoreController::class, 'create'])->name('stores.create');
//        Route::post('/', [StoreController::class, 'store'])->name('stores.store');
//        Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('stores.edit');
//        Route::put('/{store}', [StoreController::class, 'update'])->name('stores.update');
//        Route::delete('/{store}', [StoreController::class, 'destroy'])->name('stores.destroy');
//    });
});




    Route::post('/products/{storeName}', [AdminController::class, 'createProduct'])->name('products.create');
    Route::get('/products//{storeName}/edit', [AdminController::class, 'editProduct'])->name('products.edit');
    Route::delete('/products//{storeName}/{productName}', [AdminController::class, 'deleteProduct'])->name('products.delete');


Route::post('/Dashboard-adm/{action}', [AdminController::class, 'handleForm'])->name('admin.handleForm');

Route::get('/', function () {
    return redirect()->route('dashboard');
});





Route::get('/api/users', [UserController::class, 'getUsers']);


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

Route::get('route66', function () {
    return view('route66');
})->name('route66');

Route::get('des', function () {
    return view('des');
})->name('des');

Route::get('Simanja', function () {
    return view('Simanja');
})->name('Simanja');

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

Route::get('AdminOrder', function () {
    return view('AdminOrder'); 
})->name('AdminOrder');

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

Route::get('Gameside', function () {
    return view('GameSide');
})->name('GameSide');

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

Route::get('GameSide', [ProductController::class, 'indexGameCentral'])->name('GameSide');

Route::get('DigitalUniverse', [ProductController::class, 'indexDigital'])->name('DigitalUniverse');

Route::get('route66', [ProductController::class, 'indexAvenue'])->name('route66');

Route::get('Simanja', [ProductController::class, 'indexNimanja'])->name('Simanja');

Route::get('Defender', [ProductController::class, 'indexGuardian'])->name('Defender');

Route::get('Comnet', [ProductController::class, 'index'])->name('Comnet.products');


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

//Admin Order

Route::get('AdminOrder', [OrderController::class, 'showAllOrderLists'])->name('AdminOrder');

Route::post('/update-status', [OrderController::class, 'updateStatus']);

Route::get('/admin/order/{created_at}', [OrderController::class, 'showAdminOrderDetails'])->name('naenae');


//ETC

Route::get('/email', [EmailController::class, 'index']);

// Route::post('/email/send', [EmailController::class, sendEmail'])->name('send.email');

Route::post('/send-order-email', [OrderController::class, 'sendOrderEmail']);








require __DIR__.'/auth.php';

