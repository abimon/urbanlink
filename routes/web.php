<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UnitContoller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [viewsController::class, 'index']);


Route::get('/services', function () {
    return view('client.services');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/privacy', function () {
    return view('client.privacy');
});
Route::controller(viewsController::class)->group(function () {
    Route::get('/property/{property}','property');
    Route::get('/properties', 'properties');
});
Route::get('/logout', function () {
    Auth()->logout();
    return redirect('login');
});
Auth::routes();
Route::resources([
    'contact'=>ContactController::class,
    'book_tour' => BookingController::class,
]);
Route::middleware('auth')->group(function () {
    // Route::post('/addUnit', [UnitContoller::class, 'create']);
    Route::middleware('isAdmin')->group(function () {
        Route::get('/dashboard', [viewsController::class, 'dashboard']);
        Route::get('/users',function(){
            return view('dashboard.users');
        });
        Route::resources([
            'user'=>UsersController::class,
            'book'=>BookingController::class,
            'units'=>UnitContoller::class,
        ]);
    });
    Route::get('/profile', function () {
        return view('dashboard.profile');
    });
});
