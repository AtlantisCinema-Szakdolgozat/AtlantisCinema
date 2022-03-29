<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vetites;
class VetitesController extends Controller
{
    //
    public function index()
    {
        return Vetites::all();
    }
 
    public function show($id)
    {
        return Vetites::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
        'teremId' => 'required',
        'filmId' =>  'required',
        'felirat' =>  'required',
        'szinkron' => 'required',
        'vetitesNap' =>  'required',
        'kezdesiIdo' =>  'required',
        'teljesJegyar' => 'required']);
        return Vetites::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Vetites::find($id);
        $request->validate([ 
        'teremId' => 'required',
        'filmId' =>  'required',
        'felirat' =>  'required',
        'szinkron' => 'required',
        'vetitesNap' =>  'required',
        'kezdesiIdo' =>  'required',
        'teljesJegyar' => 'required']);
        $article->update($request->all());
        
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Vetites::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
