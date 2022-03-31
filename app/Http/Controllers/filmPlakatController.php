<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;


class filmPlakatController extends Controller
{
    public function index()
    {
        return Film::select('films.poszter')
        
        ->get();
    }
 
}