<?php

use Illuminate\Support\Facades\Route;


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