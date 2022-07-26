<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Admin Controllers
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\StrainController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AssementsController;

// Dispenser Controllers
use App\Http\Controllers\dispenser\ProductController as dispenser_product;
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
//Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('strains', StrainController::class);
    Route::resource('assesments', AssementsController::class);

});
//dispenser routes
Route::group(['prefix' => 'dispenser', 'middleware' => ['role:dispenser']], function() {

    Route::resource('dispenser_products', dispenser_product::class);
});
//client routes
Route::group(['prefix' => 'client', 'middleware' => ['role:client']], function() {

});

require __DIR__.'/auth.php';
