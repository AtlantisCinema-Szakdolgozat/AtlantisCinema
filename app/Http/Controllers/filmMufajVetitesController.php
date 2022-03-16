<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filmMufajVetitesController extends Controller
{
    public function index()
    {
        return DB::table('films')
        -> join('mufajs', 'films.mufajId','=','mufajs.mufajId')
        -> join('vetites', 'films.filmId','=','vetites.filmId')
        //-> where('vetites.vetitesNap', '=', '2022-03-02')
        //-> groupBy('films.filmId')
        -> orderBy('films.filmId')
        -> select(
            'films.cim',
            'films.filmLeiras',
            'films.hossz',
            'films.nyelv',
            'films.poszter',
            'films.youtubeLink',
            'mufajs.mufaj',

            'vetites.vetitesId',
            'vetites.felirat',
            'vetites.szinkron',
            'vetites.vetitesnap',
            'vetites.kezdesIdo',
            'vetites.teljesJegyar',
            'vetites.premier',
            'vetites.publikus'
            )
        ->get();
    }
 
}