<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaHotelController;
use App\Http\Controllers\FaKamarController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepsionisController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'role:admin, resepsionis, user', 'prefix'=>'car','as'=>'car.'], function() {
    Route::group(['prefix'=>'car-type', 'as'=>'car-type.'], function(){
        //
    });
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('admin', AdminController::class);
Route::resource('resepsionis', ResepsionisController::class);
Route::resource('kamar', KamarController::class);
Route::resource('fakamar', FaKamarController::class);
Route::resource('fahotel', FaHotelController::class);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
