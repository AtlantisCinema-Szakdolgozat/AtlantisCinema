<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesztController extends Controller
{
    //
    //public function teszt()
    //{
    //    return view('teszt');
    //}
    public function teszt()
    {
        // $names = [
        //     'boci', 'juh', 'ló', 'tehén',
        //     'kecske', 'sólyom', 'galamb'
        // ];
        // $randomNameKey = array_rand($names, 1);
        // $randomName = $names[$randomNameKey];

        //return view('teszt', compact('randomName'));
        //return view('pages.teszt', compact('randomName'));
        return view('pages.teszt');
    }

}