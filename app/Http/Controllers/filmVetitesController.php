<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filmVetitesController extends Controller
{
    public function index()
    {
        
        return DB::table('vetites')
        -> join('films', 'vetites.filmId','=','films.filmId')
        -> join('terems', 'vetites.teremId','=','terems.teremId')
        -> select(
            'vetites.vetitesId',
            'terems.teremNev',
            'films.cim',
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
