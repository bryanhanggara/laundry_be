<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\PromoController;
use App\Http\Controllers\api\OrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('users', [UserController::class, 'readAll']);
Route::get('shops', [ShopController::class, 'readAll']);
Route::get('promos', [PromoController::class, 'readAll']);
Route::get('orders', [OrderController::class, 'readAll']);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class,'login']);

Route::middleware('auth:sanctum')->group( function(){
    Route::get('promo/limit', [PromoController::class, 'readLimitPromo']);
    Route::get('shop/recomended', [ShopController::class, 'recomendationShop']);
    Route::get('shop/search/city/{name}', [ShopController::class, 'searchByCity']);
    Route::get('order/user/{id}', [OrderController::class, 'whereUserId']);
    Route::post('order/claim', [OrderController::class, 'claimOrder']);
});
