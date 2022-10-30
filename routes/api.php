<?php

use App\Http\Controllers\SubTitleController;
use App\Http\Controllers\TitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


/*
 |--------------------------------------------------------------------------
 | API Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register API routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | is assigned the "api" middleware group. Enjoy building your API!
 |
 */
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('title', [TitleController::class, 'index']);
Route::get('subtitle', [SubTitleController::class, 'index']);



Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::post('title', [TitleController::class, 'store']);
    Route::put('title/{title}/update', [TitleController::class, 'update']);
    Route::put('subtitle/{subtitle}/update', [SubTitleController::class, 'update']);

    // Route::delete('title/{title}/delete', [TitleController::class, 'destroy']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});