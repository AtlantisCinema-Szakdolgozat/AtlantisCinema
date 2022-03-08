<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filmVetites;
use App\Models\Vetites;
use App\Models\Terem;
use App\Models\Film;

class filmVetitesController extends Controller
{
    

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
