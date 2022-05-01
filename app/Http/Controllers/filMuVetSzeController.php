<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Vetites;


/* FILM - MŰFAJ - VETÍTÉS - SZEMÉLYEK */

class filMuVetSzeController extends Controller
{
    public function index()
    {

       return Film::with('vetites', 'mufaj', 'szemelyek')
       ->get();
    }
 
}