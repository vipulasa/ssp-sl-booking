<?php

use Illuminate\Support\Facades\Route;

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
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});

Route::get('hotel/{id}', function($id){
    return view('hotel.show', [
        'hotel' => $id
    ]);
})
//->where('id', '[0-9]+')
->name('hotel.show');

Route::get('reserve/{id}', function($id){
    return view('hotel.reservation', [
        'reserve' => $id
    ]);
})->name('hotel.reservation');

Route::get('/', function () {
    return view('home');
})->name('home');
