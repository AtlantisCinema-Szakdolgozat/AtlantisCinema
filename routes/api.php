<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeremController;

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

Route::get('/terem', [TeremController::class, 'index']);
Route::put('/terem/{id}', [TeremController::class, 'update']);
Route::get('/terem/{terem}', [TeremController::class, 'show']);
Route::delete('/terem/{id}', [TeremController::class, 'delete']);
Route::post('/terem', [TeremController::class, 'store']);
