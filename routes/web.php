<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UnitContoller;
use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [viewsController::class, 'index']);
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/book/index', [BookingController::class,'index']);
Route::get('/search', [UnitContoller::class,'show']);
Route::post('/book/tour/{property}', [BookingController::class,'create']);
Route::get('/logout', function () {
    Auth()->logout();
    return redirect('login');
});
Auth::routes();
Route::get('/rentals/{label}', [viewsController::class, 'unit']);
Route::get('/property', [viewsController::class, 'assets']);


Route::middleware('auth')->group(function () {
    Route::post('/addUnit', [UnitContoller::class, 'create']);
    Route::middleware('isAdmin')->group(function () {
        Route::get('/dashboard', [viewsController::class, 'dashboard']);
    });
    Route::get('/profile', function () {
        return view('profile');
    });
});
