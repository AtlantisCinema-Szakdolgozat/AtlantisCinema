<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terem;

class TeremController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
        $keres=Terem::where('teremNev','like',"%$name%");
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
        return $keres->orderBy('teremNev', $a)->get();    
    }
 
    public function show($id)
    {
        return Terem::find($id);
    }

    public function store(Request $request)
    {
        //kötelező oszlopok
        $request->validate([
            'teremNev' => 'required',
            'sor' =>  'required',
            'oszlop' =>  'required']);
        return Terem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Terem::find($id);
        $request->validate([ 
            'teremNev' => 'required',
            'sor' =>  'required',
            'oszlop' =>  'required']);
        $article->update($request->all());
        return $article;
    }

    public function delete($id)
    {
        $article = Terem::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
