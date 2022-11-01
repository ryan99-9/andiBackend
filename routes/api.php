<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\AcitivyController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubtitleController;
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
Route::get('title', [TitleController::class, 'index']);
Route::get('subtitle', [SubtitleController::class, 'index']);
Route::get('aboutme', [AboutmeController::class, 'index']);
Route::get('activity', [AcitivyController::class, 'index']);
Route::get('artikel', [ArtikelController::class, 'index']);
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('contact', [ContactController::class, 'index']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::post('title', [TitleController::class, 'store']);
    Route::put('title/{title}/update', [TitleController::class, 'update']);
    Route::put('subtitle/{subtitle}/update', [SubtitleController::class, 'update']);
    Route::put('aboutme/{aboutme}/update', [AboutmeController::class, 'update']);
    Route::put('activity/{activity}/update', [AcitivyController::class, 'update']);
    Route::post('activity', [AcitivyController::class, 'store']);
    Route::delete('activity/{activity}/delete', [AcitivyController::class, 'destroy']);
    Route::put('contact/{contact}/update', [ContactController::class, 'update']);
    Route::put('artikel/{artikel}/update', [ArtikelController::class, 'update']);
    Route::post('artikel', [ArtikelController::class, 'store']);
    Route::delete('artikel/{artikel}/delete', [ArtikelController::class, 'destroy']);
    Route::get('logout', [LoginController::class, 'logout']);
    Route::put('contact/{contact}/update', [ContactController::class, 'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});