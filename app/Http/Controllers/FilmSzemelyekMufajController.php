<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmSzemelyekMufajController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=Film::with('szemelyek', 'mufaj')->where('cim','like',"%$name%");
        $sort = $request->query('desc','');
        $a='';
        if($sort==""){
            return $keres->get();
        }
        else if($sort=="rend1"){
            $a='ASC';
        }
        else if($sort=="rend2"){
            $a='DESC';
        }
        return $keres->orderBy('cim', $a)->get();
    }
  
}
