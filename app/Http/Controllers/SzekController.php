<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szek;
use Illuminate\Support\Facades\DB;
class SzekController extends Controller
{
    
    public function index()
    {
        return Szek::all();
    }
 
    public function update(Request $request)
    {   
        $sor=$request->input('sor');
        $oszlop=$request->input('oszlop');
        $vetitesId=$request->input('vetitesId');
        $nezoId=$request->input("nezoId");
        $allapot=$request->input("allapot");

        $affected = DB::table(app(Szek::class)->getTable())
              ->where('sor','=',$sor)
              ->where('oszlop','=',$oszlop)
              ->where('vetitesId','=',$vetitesId)
              ->update(['nezoId' => $nezoId,'allapot' => $allapot]);

        return $affected;
         
    }

    public function store(Request $request)
    {
        $sor=$request['sor'];
        $oszlop=$request['oszlop'];
        for ($i=1; $i < $sor+1; $i++) { 
            for ($j=1; $j < $oszlop+1; $j++) { 
                    $request['sor']=$i;
                    $request['oszlop']=$j;
                Szek::create($request->all());
            }
        }
    }

  

    public function delete(Request $request, $id)
    {
        $article = Szek::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
