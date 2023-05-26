<?php

use App\Http\Controllers\Admin\AdminReservationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HotelController as HotelController;
use App\Http\Controllers\Admin\HotelController as AdminHotelController;
use App\Http\Controllers\HomeController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::resource('/hotels', AdminHotelController::class)->only([
            'index', 'create', 'edit', 'destroy'
        ]);

        Route::get('/categories', function () {
            return view('admin.category.index');
        })->name('category.index');

        Route::get('/reservations', [AdminReservationController::class, 'index'])->name('reservation.index');

        Route::get('/users', function () {
            return view('admin.users.index');
        })->name('user.index');
    });

Route::get('hotels', [HotelController::class, 'index'])
    ->name('hotel.index');

Route::get('hotel/{hotel}', [HotelController::class, 'show'])
    ->name('hotel.show');

Route::get('reserve/{hotel}', [HotelController::class, 'reservation'])
    ->middleware(['auth:sanctum', config('jetstream.auth_session')])
    ->name('hotel.reservation');

Route::get('/', HomeController::class)->name('home');
