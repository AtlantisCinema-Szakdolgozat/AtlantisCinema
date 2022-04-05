<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szek;

class SzekController extends Controller
{
    //
    public function index()
    {
        return Szek::all();
    }
 
    public function show($id)
    {
        return Szek::find($id);
    }

    public function store(Request $request)
    {
        $sor=$request['sor'];
        $oszlop=$request['oszlop'];
        for ($i=1; $i < $sor+1; $i++) { 
            for ($j=1; $j < $oszlop+1; $j++) { 
                    $request['sor']=$i;
                    $request['oszlop']=$j;
                Szek::create($request->all());
            }
        }
    }

    public function update(Request $request, $id)
    {
        $article = Szek::find($id);
        $request->validate([ 
            'sor' => 'required',
            'oszlop' => 'required',
            'vetitesId' => 'required'
        ]);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Szek::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
