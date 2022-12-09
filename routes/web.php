<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
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

Route::get('/', [MapController::class, 'index']);
Route::get('/maps/{map}', [MapController::class, 'show']);
Route::get('/facilities/{facility}', [FacilityController::class, 'facility']);
Route::get('/cafeterias/{cafeteria}', [CafeteriaController::class, 'cafeteria']);
Route::get('/shops/{shop}', [ShopController::class, 'shop']);
