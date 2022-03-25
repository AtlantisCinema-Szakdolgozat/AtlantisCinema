<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(){
        return view("pages.dolgozo");
    }

    public function authenticate(LoginRequest $request){
        $filds =$request->validate([
            'email' => 'required',
            'jelszo' =>  'required',
        ]);
        // nincs Auth osztályom
        if(!Auth::attempt($data)){
            $request->session()->flash("daner","Sikertelen bejelentkezés");
            return redirect()->route("dolgozo");
        }

        $request->session()->flash("succes","Sikeres bejelentkezés");
        $token=$request->user->createToken('myapptoken');
        return redirect()->route("dolgozok");
    }

    public function logout(Request $request) {
        Auth::logout();
        $token=$request->user->currentAccessToken()->delete();
        return redirect('/login');
    }
}
