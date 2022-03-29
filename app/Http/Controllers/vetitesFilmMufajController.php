<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Vetites;


class vetitesFilmMufajController extends Controller
{
    public function index(Request $request)
    {
       $name = $request->query('q', '');

       return Film::with('vetites', 'mufaj')
       ->where('cim', 'like', "%$name%")
       
       ->get();
    }
 
}