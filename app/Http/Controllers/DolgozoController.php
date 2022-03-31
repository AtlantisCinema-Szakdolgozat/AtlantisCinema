<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolgozo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class DolgozoController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = $request->query('q','');
            $keres=Dolgozo::where('name','like',"%$name%");
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
            return $keres->orderBy('name', $a)->get(); 
    }
 
    public function show($id)
    {
        return Dolgozo::find($id);
    }

    public function store(Request $request)
    {
        $data =$request->validate([
            'name' => 'required|unique:users|max:50',
            'email' => 'required|max:200',
            'password' =>  'required',
            'munkakor' =>  'required']);
        $data["password"]= Hash::make($data["password"]);
        return Dolgozo::create($data);
    }

    public function update(Request $request, $id)
    {
        $article = Dolgozo::find($id);
        $request->validate([ 
            'name' => 'required',
            'email' => 'required|max:200',
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
