<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

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
