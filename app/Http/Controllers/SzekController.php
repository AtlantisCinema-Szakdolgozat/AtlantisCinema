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
        //kötelező oszlopok
     $request->validate([
        'allapot' => 'required']);
        return Szek::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Szek::find($id);
     $request->validate([ 
     'allapot' => 'required']);
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
