<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    // use HasFactory;
    protected $primaryKey='filmId';
    protected $table ='films';
    public $timestamps = false;

    public function szemelyek(){
        return $this->belongsToMany(Szemely::class, 'film__szemelies','filmId','szemelyId')->as('kapcsolat')->withPivot('poszt');
    }
    
    public function mufaj()
    {
        return $this->hasOne(Mufaj::class, 'mufajId', 'mufajId');
    }

    
}
