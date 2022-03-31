<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class filmMufajController extends Controller
{
    public function index()
    {
        return DB::table('films')
        -> join('mufajs', 'films.mufajId','=','mufajs.mufajId')
        -> select(
            'films.cim',
            'films.filmLeiras',
            'films.hossz',
            'films.nyelv',
            'films.poszter',
            'films.youtubeLink',
            'mufajs.mufaj',

        )
        
        ->get();
    }
 
}