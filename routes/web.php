<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FacilityNewsController;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\CafeteriaNewsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopNewsController;
use App\Http\Controllers\ItemController;

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
Route::get('/facilities/{facility}/edit', [FacilityController::class, 'edit']);

Route::get('/facility_news/{facility}/create', [FacilityNewsController::class, 'create']);
Route::get('/facility_news/{facility_news}/edit', [FacilityNewsController::class, 'edit']);

Route::get('/cafeterias', [CafeteriaController::class, 'index']);
Route::get('/cafeterias/create', [CafeteriaController::class, 'create']);
Route::get('/cafeterias/{cafeteria}/edit', [CafeteriaController::class, 'edit']);

Route::get('/cafeteria_news/{cafeteria}/create', [CafeteriaNewsController::class, 'create']);
Route::get('/cafeteria_news/{cafeteria_news}/edit', [CafeteriaNewsController::class, 'edit']);

Route::get('/menus/{cafeteria}/create', [MenuController::class, 'create']);
Route::get('/menus/{cafeteria}/{menu}/edit', [MenuController::class, 'edit']);

Route::get('/shops', [ShopController::class, 'index']);
Route::get('/shops/create', [ShopController::class, 'create']);
Route::get('/shops/{shop}/edit', [ShopController::class, 'edit']);

Route::get('/shop_news/{shop}/create', [ShopNewsController::class, 'create']);
Route::get('/shop_news/{shop_news}/edit', [ShopNewsController::class, 'edit']);

Route::get('/items/{shop}/create', [ItemController::class, 'create']);
Route::get('/items/{shop}/{item}/edit', [ItemController::class, 'edit']);

Route::get('/maps/{map}', [MapController::class, 'show']);
Route::get('/facilities/{facility}', [FacilityController::class, 'show']);
Route::get('/facility_news/{facility_news}', [FacilityNewsController::class, 'show']);
Route::get('/cafeterias/{cafeteria}', [CafeteriaController::class, 'show']);
Route::get('/cafeteria_news/{cafeteria_news}', [CafeteriaNewsController::class, 'show']);
Route::get('/shops/{shop}', [ShopController::class, 'show']);
Route::get('/shop_news/{shop_news}', [ShopNewsController::class, 'show']);

Route::post('/facilities', [FacilityController::class, 'store']);
Route::post('/cafeterias', [CafeteriaController::class, 'store']);
Route::post('/shops', [ShopController::class, 'store']);

Route::post('/facilities/{facility}', [FacilityNewsController::class, 'store']);
Route::post('/cafeterias/{cafeteria}', [CafeteriaNewsController::class, 'store']);
Route::post('/shops/{shop}', [ShopNewsController::class, 'store']);

Route::post('/cafeterias/{cafeteria}/menu', [MenuController::class, 'store']);
Route::post('/shops/{shop}/item', [ItemController::class, 'store']);

Route::put('/facilities/{facility}', [FacilityController::class, 'update']);
Route::put('/cafeterias/{cafeteria}', [CafeteriaController::class, 'update']);
Route::put('/shops/{shop}', [ShopController::class, 'update']);
Route::put('/cafeterias/{cafeteria}/congestion_situation', [CafeteriaController::class, 'update_congestion_situation']);

Route::put('/facility_news/{facility_news}', [FacilityNewsController::class, 'update']);
Route::put('/cafeteria_news/{cafeteria_news}', [CafeteriaNewsController::class, 'update']);
Route::put('/shop_news/{shop_news}', [ShopNewsController::class, 'update']);

Route::put('/menus/{cafeteria}/{menu}', [MenuController::class, 'update']);
Route::put('/items/{shop}/{item}', [ItemController::class, 'update']);

Route::delete('/facilities/{facility}', [FacilityController::class,'delete']);
Route::delete('/facility_news/{facility_news}', [FacilityNewsController::class,'delete']);
Route::delete('/cafeterias/{cafeteria}', [CafeteriaController::class,'delete']);
Route::delete('/cafeteria_news/{cafeteria_news}', [CafeteriaNewsController::class,'delete']);
Route::delete('/shops/{shop}', [ShopController::class,'delete']);
Route::delete('/shop_news/{shop_news}', [ShopNewsController::class,'delete']);

require __DIR__.'/auth.php';
