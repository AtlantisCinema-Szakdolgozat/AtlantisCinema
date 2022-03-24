<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nezo;

class NezoController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=Nezo::where('nev','like',"%$name%");
        $sort = $request->query('desc','');
        $a='';
        if($sort==""){
            return $keres->get();
        }
        else if($sort=="rendezesSzempont1"){
            $a='ASC';
        }
        else if($sort=="rendezesSzempont2"){
            $a='DESC';
        }
        return $keres->orderBy('nev', $a)->get();
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
