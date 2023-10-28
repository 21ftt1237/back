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
