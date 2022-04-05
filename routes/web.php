<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MufajController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SzemelyController;
use App\Http\Controllers\VetitesController;
use App\Http\Controllers\NezoController;
use App\Http\Controllers\KedvezmenyController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\Film_SzemelyController;
use App\Http\Controllers\SzekController;
use App\Http\Controllers\foglalasFelvitelController;

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

Route::post('/foglalas-Felvitel', [foglalasFelvitelController::class, 'foglalasFelvitel'] )->name('foglalas-Felvitel');


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
})->middleware('can:penztarosJogosultsag');

Route::get('penztarFoglalas', function () {
    return view('pages.penztarFoglalas');
})->middleware('can:penztarosJogosultsag');

Route::get('penztarVasarlas', function () {
    return view('pages.penztarVasarlas');
})->middleware('can:penztarosJogosultsag');

Route::get('szemelyek', function () {
    return view('pages.szemelyek');
})->middleware('can:adminJogosultsag');

Route::get('film', function () {
    return view('pages.film');
})->middleware('can:adminJogosultsag');

Route::get('terem', function () {
    return view('pages.terem');
})->middleware('can:adminJogosultsag');

Route::get('vetites', function () {
    return view('pages.vetites');
})->middleware('can:adminJogosultsag');

Route::get('kedvezmeny', function () {
    return view('pages.kedvezmeny');
})->middleware('can:adminJogosultsag');

Route::get('dolgozok', function () {
    return view('pages.dolgozok');
})->middleware('can:adminJogosultsag');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
