<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film_Szemely;

class Film_SzemelyController extends Controller
{
    //
    public function index()
    {
        return Film_Szemely::all();
    }
 
    public function show($id)
    {
        return Film_Szemely::find($id);
    }

    public function store(Request $request)
    {
        //kötelező oszlopok
     $request->validate([
        'poszt' => 'required']);
        return Film_Szemely::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Film_Szemely::find($id);
     $request->validate([ 
     'poszt' => 'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Film_Szemely::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
