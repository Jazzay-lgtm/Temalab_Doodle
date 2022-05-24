<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('foglalas');
})->middleware(['auth'])->name('foglalas');

Route::get('/torles', function () {
    return view('torles');
})->middleware(['auth'])->name('torles');

Route::post('/foglalas',[BookingController::class,'store']);
Route::delete('/foglalás-torlese/{id}',[BookingController::class,'destroy']);

Route::get('/rolunk', function () {
    return view('rolunk');
})->middleware(['auth'])->name('rolunk');

Route::post('/logout', function () {
})->middleware(['auth'])->name('logout');

require __DIR__.'/auth.php';
