<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
class penztarFoOldalController extends Controller
{
    public function index()
    {
        $filmek=Film::with('terem')->get();
        return  $filmek;
        
        
    }
}
