<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::post('/', [EventController::class, 'store']);
    Route::get('/{event}', [EventController::class, 'show']);
    Route::put('/{event}', [EventController::class, 'update']);
    Route::delete('/{event}', [EventController::class, 'destroy']);
});


Route::post('registration', [AuthController::class, 'customRegistration']);
Route::post('signout', [AuthController::class, 'signOut']);

Route::get('auth/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['apiJWT']], function (){
    Route::get('/users/events', [EventController::class, 'userEvents']);
});
