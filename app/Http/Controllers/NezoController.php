<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nezo;

class NezoController extends Controller
{
    //
    public function index()
    {
        return Nezo::all();
    }
 
    public function show($id)
    {
        return Nezo::find($id);
    }

    public function store(Request $request)
    {
        //kötelező oszlopok
     $request->validate([
        'nev' => 'required',
        'email' =>  'required']);
        return Nezo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Nezo::find($id);
     $request->validate([ 
        'nev' => 'required',
        'email' =>  'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Nezo::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
