<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneralApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('track', [GeneralApiController::class, 'analitycs'])->name('api.track');

Route::get('yt-ch', [GeneralApiController::class, 'ytChannel'])->name('api.yt-ch');

Route::get('yt-sc', [GeneralApiController::class, 'ytSearch'])->name('api.yt-sc');

Route::get('data', [GeneralApiController::class, 'programs'])->name('api.datas');

Route::get('data/{id}/get', [GeneralApiController::class, 'showProgram'])->name('api.datas.show');