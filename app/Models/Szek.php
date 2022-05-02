<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szek extends Model
{
    use HasFactory;
    protected $table='szeks';
    protected $primaryKey=['sor','oszlop','vetitesId'];
    public $incrementing = false;
    protected $fillable = ['sor','oszlop','vetitesId','nezoId','kedvezmenId','elvesztesiIdopont','allapot'];


    static function szekekMod($sor,$oszlop,$vetitesId){
        return 
        Szek::where('sor','=',$sor)
        ->where('oszlop','=',$oszlop)
        ->where('vetitesId','=',$vetitesId)
        ->first();
    }

}
