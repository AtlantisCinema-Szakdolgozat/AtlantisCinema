<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Film_Szemely;

class FilmController extends Controller
{
    public function index()
    {
        $filmek= Film::all();
        return $filmek;
    }
 
    public function show($id)
    {
        return Film::find($id);
    }

    public function store(Request $request)
    {
      $x=$request->validate([
        'cim' => 'required',
        'filmLeiras' =>  'required',
        'hossz' =>  'required',
        'nyelv' =>  'required',
        'poszter' =>  'required',
        'youtubeLink' =>  'required',
        'mufajId' =>  'required']);
        $x['poszter']=$request->file('file')->store('poster');
        $film=Film::create($x);
        $film->save();
        $y=$request->validate([
            'szereploIdk.*'=>'numeric'
        ]);
        $film->szereplok()->syncWithPivotValues( $y['szereploIdk'], ['poszt' => "színész"]);
        $z=$request->validate([
            'rendezoIdk.*'=>'numeric'
        ]);
        $film->rendezok()->syncWithPivotValues( $z['rendezoIdk'], ['poszt' => "rendező"]);
        $szemely=Film_Szemely::create($x);
        return $film;
    }

    public function update(Request $request, $id)
    {

        $film = Film::find($id);
       
        $x=$request->validate([ 
            'cim' => 'required',
            'filmLeiras' =>  'required',
            'hossz' =>  'required',
            'nyelv' =>  'required',
            'youtubeLink' =>  'required',
            'mufajId' =>  'required'
        ]);
        if ($request->hasFile('file')){
            $x['poszter']=$request->file('file')->store('poster');
        }
        $film->cim=$x['cim'];
        $film->filmLeiras=$x['filmLeiras'];
        $film->hossz=$x['hossz'];
        $film->nyelv=$x['nyelv'];
        $film->youtubeLink=$x['youtubeLink'];
        $film->mufajId=$x['mufajId'];
        $film->save();
        $y=$request->validate([
            'szereploIdk.*'=>'numeric'
        ]);
        $film->szereplok()->syncWithPivotValues( $y['szereploIdk'], ['poszt' => "színész"]);
        $z=$request->validate([
            'rendezoIdk.*'=>'numeric'
        ]);
        $film->rendezok()->syncWithPivotValues( $z['rendezoIdk'], ['poszt' => "rendező"]);
        return $film;
       
    }

    public function delete(Request $request, $id)
    {
        $article = Film::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
