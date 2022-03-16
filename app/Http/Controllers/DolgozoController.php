<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolgozo;

class DolgozoController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=Dolgozo::where('nev','like',"%$name%");
        $sort = $request->query('desc','');
        $a='';
        if($sort==""){
            return $keres->get();
        }
        else if($sort=="rend1"){
            $a='ASC';
        }
        else if($sort=="rend2"){
            $a='DESC';
        }
        return $keres->orderBy('nev', $a)->get(); 
    }
 
    public function show($id)
    {
        return Dolgozo::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
    'nev' => 'required',
    'jelszo' =>  'required',
    'munkakor' =>  'required']);
        return Dolgozo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Dolgozo::find($id);
        $request->validate([ 
            'nev' => 'required',
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
