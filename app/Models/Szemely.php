<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Szemely extends Model
{
    
    protected $primaryKey='szemelyId';
    protected $table ='szemelies';
    protected $fillable = ['nev'];
    public $timestamps = false;

    public function filmek(){
        return $this->belongsToMany(Film::class, 'film__szemelies','szemelyId','filmId');
    }
      
}
