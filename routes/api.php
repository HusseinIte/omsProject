<?php

use App\Http\Controllers\User\AuthController;
use App\Services\Users\ManageEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');


});
Route::post('/image',[\App\Http\Controllers\Image\ImageController::class,'uploadMultipleImage']);
Route::post('/test',[\App\Http\Controllers\Product\ProductController::class,'testProduct']);

