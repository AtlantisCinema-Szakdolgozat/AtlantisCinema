<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolgozo;

class DolgozoController extends Controller
{
    //
    public function index()
    {
        return Dolgozo::all();
    }
 
    public function show($id)
    {
        return Dolgozo::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
    'neve' => 'required',
    'jelszo' =>  'required',
    'munkakor' =>  'required']);
        return Dolgozo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Dolgozo::find($id);
     $request->validate([ 
        'neve' => 'required',
        'jelszo' =>  'required',
        'munkakor' =>  'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Dolgozo::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
