<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mufaj;

class MufajController extends Controller
{
    //
    public function index()
    {
        return Mufaj::all();
    }
 
    public function show($id)
    {
        return Mufaj::find($id);
    }

    public function store(Request $request)
    {
     $request->validate([
        'mufaj' => 'required']);
        return Mufaj::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Mufaj::find($id);
     $request->validate([ 
        'mufaj' => 'required']);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Mufaj::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
