<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szemely;

class SzemelyController extends Controller
{
    //
    public function index()
    {
        return Szemely::all();
    }
 
    public function show($id)
    {
        return Szemely::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
    'neve' => 'required']);
        return Szemely::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Szemely::find($id);
     $request->validate([ 
        'neve' => 'required']);
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
