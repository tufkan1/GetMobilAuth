<?php

use App\Http\Controllers\Auth\ApiAuthController;
use Illuminate\Http\Request;
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

Route::controller(ApiAuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::group(['middleware' => 'auth:api', "controller" => ApiAuthController::class], function(){
    Route::post("profile", "profile");
    Route::post("departments", "departments");
    Route::post("logout", "logout");
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
