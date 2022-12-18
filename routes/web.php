<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\ShopController;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [MapController::class, 'index'])->name('index');
Route::get('/users', [UserController::class, 'index']);
Route::get('/facilities', [FacilityController::class, 'index']);
Route::get('/facilities/create', [FacilityController::class, 'create']);
Route::get('/cafeterias', [CafeteriaController::class, 'index']);
Route::get('/cafeterias/create', [CafeteriaController::class, 'create']);
Route::get('/shops', [ShopController::class, 'index']);
Route::get('/shops/create', [ShopController::class, 'create']);
Route::get('/maps/{map}', [MapController::class, 'show']);
Route::get('/facilities/{facility}', [FacilityController::class, 'show']);
Route::get('/cafeterias/{cafeteria}', [CafeteriaController::class, 'show']);
Route::get('/shops/{shop}', [ShopController::class, 'show']);

Route::post('/facilities', [FacilityController::class, 'store']);
Route::post('/cafeterias', [CafeteriaController::class, 'store']);
Route::post('/shops', [ShopController::class, 'store']);

require __DIR__.'/auth.php';
