<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Admin Controllers
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\StrainController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AssementsController;
use App\Http\Controllers\admin\ProfileController;

// Dispenser Controllers
use App\Http\Controllers\dispenser\ProductController as dispenser_product;
use App\Http\Controllers\dispenser\ProfileController as dispenser_profile;

//Client Controller
use App\Http\Controllers\client\ProfileController as client_profile;
use App\Http\Controllers\client\ProductController as client_product;
use App\Http\Controllers\client\HistoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['auth']], function() {
    Route::get('/',[HomeController::class,'index' ] )->name('dashboard');
});
Route::get('check_medication',[HomeController::class,'check_medication' ] )->name('check.medication');
Route::get('add_medication/{id}',[HomeController::class,'add_medication' ] )->name('add.medication');
Route::post('store_medication',[HomeController::class,'store_medication' ] )->name('store.medication');

//Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('strains', StrainController::class);
    Route::resource('assesments', AssementsController::class);
    Route::resource('profiles', ProfileController::class);

});
//dispenser routes
Route::group(['prefix' => 'dispenser', 'middleware' => ['role:dispenser']], function() {

    Route::resource('dispenser_products', dispenser_product::class);
    Route::resource('dispenser_profiles', dispenser_profile::class);
});
//client routes
Route::group(['prefix' => 'client', 'middleware' => ['role:client']], function() {
    Route::resource('client_profiles', client_profile::class);
    Route::post('update', [client_profile::class,'password_reset'])->name('update_info');
    Route::resource('client_products', client_product::class);
    Route::resource('histories', HistoryController::class);
});

require __DIR__.'/auth.php';
