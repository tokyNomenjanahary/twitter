<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\TweetConfidentController;
use App\Http\Controllers\Api\TweetController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

// Route::post('userData', function () {
//     return response()->json([
//         'info' => 'My profil'
//     ]);
// })->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('users/data', function (){
        return Auth::user();
    });
    Route::apiResource('users', UserController::class);
    Route::apiResource('tweets', TweetController::class);
    Route::get('tweet_confidents', [TweetConfidentController::class, 'index']);
    Route::get('tweet_locations', [LocationController::class, 'index']);
    Route::get('user/{user_id}/tweet/{tweet_id}', [TweetController::class, 'isLikedByUserLoggedIn']);
});