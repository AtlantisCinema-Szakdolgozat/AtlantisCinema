<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terem;

class TeremController extends Controller
{
    //
    public function index()
    {
        return Terem::all();
    }
 
    public function show($id)
    {
        return Terem::find($id);
    }

    public function store(Request $request)
    {
        //kötelező oszlopok
     $request->validate([
    'teremnev' => 'required',
    'sor' =>  'required',
    'oszlop' =>  'required']);
        return Terem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Terem::find($id);
     $request->validate([ 
     'teremnev' => 'required',
     'sor' =>  'required',
     'oszlop' =>  'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Terem::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
