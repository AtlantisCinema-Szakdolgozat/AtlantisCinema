<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $primaryKey='filmId';
    protected $table='films';
    public $timestamps=false;



    public function terem(){

        return $this->belongsToMany(Terem::class,'vetites','filmId','teremId')->as('kapcsolat')->withPivot('szinkron','kezdesiIdo','vetitesNap');


    }
}
