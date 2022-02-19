<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kedvezmeny;

class KedvezmenyController extends Controller
{
    //
    public function index()
    {
        return Kedvezmeny::all();
    }
 
    public function show($id)
    {
        return Kedvezmeny::find($id);
    }

    public function store(Request $request)
    {
        //kötelező oszlopok
     $request->validate([
        'tipus' => 'required',
        'szazalek' =>  'required',
        'leiras' =>  'required']);
        return Kedvezmeny::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Kedvezmeny::find($id);
     $request->validate([ 
        'tipus' => 'required',
        'szazalek' =>  'required',
        'leiras' =>  'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Kedvezmeny::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
