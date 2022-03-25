<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    //
    public function index()
    {
        $filmek= Film::with('szemelyek', 'mufaj')->get();
        return $filmek;
    }
 
    public function show($id)
    {
        return Film::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
        'cim' => 'required',
        'filmleiras' =>  'required',
        'hossz' =>  'required',
        'nyelv' =>  'required',
        'poszter' =>  'required',
        'youtubelink' =>  'required',
        'mufajid' =>  'required']);
        return Film::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Film::find($id);
     $request->validate([ 
     'cim' => 'required',
     'filmleiras' =>  'required',
     'hossz' =>  'required',
     'nyelv' =>  'required',
     'poszter' =>  'required',
     'youtubelink' =>  'required',
     'mufajid' =>  'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Film::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
