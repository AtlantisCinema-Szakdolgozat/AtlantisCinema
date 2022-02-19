<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesztController;
use App\Http\Controllers\TeremController;
use App\Http\Controllers\MufajController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SzemelyController;
use App\Http\Controllers\VetitesController;
use App\Http\Controllers\NezoController;
use App\Http\Controllers\KedvezmenyController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\Film_SzemelyController;
use App\Http\Controllers\SzekController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('pages.index');
});

Route::get('index', function () {
    return view('pages.index');
});

Route::get('arak', function () {
    return view('pages.arak');
});

Route::get('akciok', function () {
    return view('pages.akciok');
});

Route::get('hazirend', function () {
    return view('pages.hazirend');
});

Route::get('kapcsolat', function () {
    return view('pages.kapcsolat');
});

Route::get('nyitoLap_tablazat', function () {
    return view('pages.nyitoLap_tablazat');
});

Route::get('filmOldal', function () {
    return view('pages.filmOldal');
});

Route::get('foglalasOldal', function () {
    return view('pages.foglalasOldal');
});

Route::get('penztar', function () {
    return view('pages.penztar');
});

Route::get('penztarFoglalas', function () {
    return view('pages.penztarFoglalas');
});

Route::get('penztarVasarlas', function () {
    return view('pages.penztarVasarlas');
});

Route::get('film', function () {
    return view('pages.film');
});

Route::get('terem', function () {
    return view('pages.terem');
});

Route::get('vetites', function () {
    return view('pages.vetites');
});

Route::get('kedvezmeny', function () {
    return view('pages.kedvezmeny');
});

Route::get('dolgozok', function () {
    return view('pages.dolgozok');
});

Route::get('statisztika', function () {
    return view('pages.statisztika');
});

Route::get('dolgozo', function () {
    return view('pages.dolgozo');
});

Route::get('/api/mufaj', [MufajController::class, 'index']);
Route::put('/api/mufaj/id', [MufajController::class, 'update']);
Route::get('/api/mufaj/{mufaj}', [MufajController::class, 'show']);
Route::delete('/api/mufaj/{id}', [MufajController::class, 'destroy']);
Route::post('/api/mufaj', [MufajController::class, 'store']);

Route::get('/api/szemely', [SzemelyController::class, 'index']);
Route::put('/api/szemely/id', [SzemelyController::class, 'update']);
Route::get('/api/szemely/{szemely}', [SzemelyController::class, 'show']);
Route::delete('/api/szemely/{id}', [SzemelyController::class, 'destroy']);
Route::post('/api/szemely', [SzemelyController::class, 'store']);

Route::get('/api/film_szemely', [Film_SzemelyController::class, 'index']);
Route::put('/api/film_szemely/id', [Film_SzemelyController::class, 'update']);
Route::get('/api/film_szemely/{film_szemely}', [Film_SzemelyController::class, 'show']);
Route::delete('/api/film_szemely/{id}', [Film_SzemelyController::class, 'destroy']);
Route::post('/api/film_szemely', [Film_SzemelyController::class, 'store']);

Route::get('/api/film', [FilmController::class, 'index']);
Route::put('/api/film/id', [FilmController::class, 'update']);
Route::get('/api/film/{film}', [FilmController::class, 'show']);
Route::delete('/api/film/{id}', [FilmController::class, 'destroy']);
Route::post('/api/film', [FilmController::class, 'store']);

Route::get('/api/terem', [TeremController::class, 'index']);
Route::put('/api/terem/id', [TeremController::class, 'update']);
Route::get('/api/terem/{terem}', [TeremController::class, 'show']);
Route::delete('/api/terem/{id}', [TeremController::class, 'destroy']);
Route::post('/api/terem', [TeremController::class, 'store']);

Route::get('/api/vetites', [VetitesController::class, 'index']);
Route::put('/api/vetites/id', [VetitesController::class, 'update']);
Route::get('/api/vetites/{vetites}', [VetitesController::class, 'show']);
Route::delete('/api/vetites/{id}', [VetitesController::class, 'destroy']);
Route::post('/api/vetites', [VetitesController::class, 'store']);

Route::get('/api/nezo', [NezoController::class, 'index']);
Route::put('/api/nezo/id', [NezoController::class, 'update']);
Route::get('/api/nezo/{nezo}', [NezoController::class, 'show']);
Route::delete('/api/nezo/{id}', [NezoController::class, 'destroy']);
Route::post('/api/nezo', [NezoController::class, 'store']);

Route::get('/api/szek', [SzekController::class, 'index']);
Route::put('/api/nezo/id', [SzekController::class, 'update']);
Route::get('/api/nezo/{nezo}', [SzekController::class, 'show']);
Route::delete('/api/nezo/{id}', [SzekController::class, 'destroy']);
Route::post('/api/nezo', [SzekController::class, 'store']);

Route::get('/api/kedvezmeny', [KedvezmenyController::class, 'index']);
Route::put('/api/kedvezmeny/id', [KedvezmenyController::class, 'update']);
Route::get('/api/kedvezmeny/{kedvezmeny}', [KedvezmenyController::class, 'show']);
Route::delete('/api/kedvezmeny/{id}', [KedvezmenyController::class, 'destroy']);
Route::post('/api/kedvezmeny', [KedvezmenyController::class, 'store']);

Route::get('/api/dolgozo', [DolgozoController::class, 'index']);
Route::put('/api/dolgozo/id', [DolgozoController::class, 'update']);
Route::get('/api/dolgozo/{dolgozo}', [DolgozoController::class, 'show']);
Route::delete('/api/dolgozo/{id}', [DolgozoController::class, 'destroy']);
Route::post('/api/dolgozo', [DolgozoController::class, 'store']);