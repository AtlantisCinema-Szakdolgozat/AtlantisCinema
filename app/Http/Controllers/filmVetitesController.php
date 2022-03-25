<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filmVetitesController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=DB::table('vetites')
        -> join('films', 'vetites.filmId','=','films.filmId')
        -> join('terems', 'vetites.teremId','=','terems.teremId')
        -> select(
            'vetites.vetitesId',
            'terems.teremNev',
            'terems.teremId',
            'films.cim',
            'films.filmId',
            'vetites.felirat',
            'vetites.szinkron',
            'vetites.vetitesNap',
            'vetites.kezdesiIdo',
            'vetites.teljesJegyar',
            'vetites.premier',
            'vetites.publikus'
            )
        ->where('cim','like',"%$name%")
        ->orWhere('teremNev','like',"%$name%");
        $sort = $request->query('desc','');
        $mit="";
        $miAlapjan="";
        if($sort==""){
            return $keres->get();
        }
        else if($sort=="rend1"){
            $mit="teremNev";
            $miAlapjan="ASC";
        }
        else if($sort=="rend2"){
            $mit="teremNev";
            $miAlapjan="DESC";
        }
        else if($sort=="rend3"){
            $mit="cim";
            $miAlapjan="ASC";
        }
        else if($sort=="rend4"){
            $mit="cim";
            $miAlapjan="DESC";
        }
        return $keres->orderBy($mit, $miAlapjan)->get();
    }
 
}
