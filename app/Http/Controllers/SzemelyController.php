<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szemely;

class SzemelyController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=Szemely::where('nev','like',"%$name%");
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
        return Szemely::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
    'nev' => 'required']);
        return Szemely::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Szemely::find($id);
     $request->validate([ 
        'nev' => 'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Szemely::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
