<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MufajController;
use App\Http\Controllers\SzemelyController;
use App\Http\Controllers\Film_SzemelyController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\TeremController;
use App\Http\Controllers\VetitesController;
use App\Http\Controllers\NezoController;
use App\Http\Controllers\SzekController;
use App\Http\Controllers\KedvezmenyController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\filmVetitesController;
use App\Http\Controllers\penztarFoOldalController;



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


Route::get('/mufaj', [MufajController::class, 'index']);
Route::put('/mufaj/{id}', [MufajController::class, 'update']);
Route::get('/mufaj/{mufaj}', [MufajController::class, 'show']);
Route::delete('/mufaj/{id}', [MufajController::class, 'delete']);
Route::post('/mufaj', [MufajController::class, 'store']);

Route::get('/szemely', [SzemelyController::class, 'index']);
Route::put('/szemely/{id}', [SzemelyController::class, 'update']);
Route::get('/szemely/{szemely}', [SzemelyController::class, 'show']);
Route::delete('/szemely/{id}', [SzemelyController::class, 'delete']);
Route::post('/szemely', [SzemelyController::class, 'store']);

Route::get('/film_szemely', [Film_SzemelyController::class, 'index']);
Route::put('/film_szemely/{id}', [Film_SzemelyController::class, 'update']);
Route::get('/film_szemely/{film_szemely}', [Film_SzemelyController::class, 'show']);
Route::delete('/film_szemely/{id}', [Film_SzemelyController::class, 'delete']);
Route::post('/film_szemely', [Film_SzemelyController::class, 'store']);

Route::get('/film', [FilmController::class, 'index']);
Route::put('/film/{id}', [FilmController::class, 'update']);
Route::get('/film/{film}', [FilmController::class, 'show']);
Route::delete('/film/{id}', [FilmController::class, 'delete']);
Route::post('/film', [FilmController::class, 'store']);

Route::get('/terem', [TeremController::class, 'index']);
Route::put('/terem/{id}', [TeremController::class, 'update']);
Route::get('/terem/{terem}', [TeremController::class, 'show']);
Route::delete('/terem/{id}', [TeremController::class, 'delete']);
Route::post('/terem', [TeremController::class, 'store']);

Route::get('/vetites', [VetitesController::class, 'index']);
Route::put('/vetites/{id}', [VetitesController::class, 'update']);
Route::get('/vetites/{vetites}', [VetitesController::class, 'show']);
Route::delete('/vetites/{id}', [VetitesController::class, 'delete']);
Route::post('/vetites', [VetitesController::class, 'store']);

Route::get('/nezo', [NezoController::class, 'index']);
Route::put('/nezo/{id}', [NezoController::class, 'update']);
Route::get('/nezo/{nezo}', [NezoController::class, 'show']);
Route::delete('/nezo/{id}', [NezoController::class, 'delete']);
Route::post('/nezo', [NezoController::class, 'store']);

Route::get('/szek', [SzekController::class, 'index']);
Route::put('/nezo/{id}', [SzekController::class, 'update']);
Route::get('/nezo/{nezo}', [SzekController::class, 'show']);
Route::delete('/nezo/{id}', [SzekController::class, 'delete']);
Route::post('/nezo', [SzekController::class, 'store']);

Route::get('/kedvezmeny', [KedvezmenyController::class, 'index']);
Route::put('/kedvezmeny/{id}', [KedvezmenyController::class, 'update']);
Route::get('/kedvezmeny/{kedvezmeny}', [KedvezmenyController::class, 'show']);
Route::delete('/kedvezmeny/{id}', [KedvezmenyController::class, 'delete']);
Route::post('/kedvezmeny', [KedvezmenyController::class, 'store']);

Route::get('/dolgozo', [DolgozoController::class, 'index']);
Route::put('/dolgozo/{id}', [DolgozoController::class, 'update']);
Route::get('/dolgozo/{dolgozo}', [DolgozoController::class, 'show']);
Route::delete('/dolgozo/{id}', [DolgozoController::class, 'delete']);
Route::post('/dolgozo', [DolgozoController::class, 'store']);
Route::get('/filmVetites', [filmVetitesController::class, 'index']);
Route::get('/penztarFoOldal', [penztarFoOldalController::class, 'index']);

