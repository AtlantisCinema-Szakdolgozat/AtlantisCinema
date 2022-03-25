<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nezo;
class foglalasFelvitelController extends Controller
{
    public function foglalasFelvitel(Request $request)
    {
        $request -> validate([
            'nev' => 'required',
            'email' => 'required|email|unique:nezos',
            
        ]);


        $nezo = new Nezo();

        $nezo -> nev = $request -> nev;
        $nezo -> email = $request -> email;
        
        $res = $nezo -> save();

        if($res){

            return back()->with('sikeres','A foglalás megtörtént');

        }else{

            return back()->with('sikertelen','A foglalás sikertelen volt');

        }




    }
}
