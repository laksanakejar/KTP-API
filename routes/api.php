<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KtpController;
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

Route::get('/pengguna', [KtpController::class,'index']);
Route::post('/pengguna/create', [KtpController::class,'store']);
Route::get('/pengguna/show/{nik}', [KtpController::class,'show']);
Route::post('/pengguna/update/{nik}', [KtpController::class,'update']);
Route::get('/pengguna/delete/{nik}', [KtpController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
