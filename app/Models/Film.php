<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $primaryKey='filmId';
    protected $table='films';
    protected $fillable = ['cim','filmLeiras','hossz','nyelv','poszter',
    'youtubeLink','mufajId'];
    public $timestamps=false;

    
    public function terem()
    {
        return $this->belongsToMany(Terem::class,'vetites','filmId','teremId')->as('kapcsolat')
            ->withPivot('vetitesId','szinkron','kezdesiIdo','vetitesNap','publikus');

        return $this->belongsToMany(Terem::class,'vetites','filmId','teremId')->as('kapcsolat')
            ->withPivot('vetitesId','szinkron','kezdesiIdo','vetitesNap');
    }

    public function szemelyek()
    {
        return $this->belongsToMany(Szemely::class, 'film__szemelies','filmId','szemelyId')->as('kapcsolat')
            ->withPivot('poszt');
    }

    public function rendezok()
    {
        return $this->belongsToMany(Szemely::class, 'film__szemelies','filmId','szemelyId')
            ->wherePivot('poszt','=','rendező')->as('kapcsolat')->withPivot('poszt');
    }

    public function szereplok()
    {
        return $this->belongsToMany(Szemely::class, 'film__szemelies','filmId','szemelyId')
            ->wherePivot('poszt','=','színész')->as('kapcsolat')->withPivot('poszt');
    }

    public function mufaj()
    {
        return $this->hasOne(Mufaj::class, 'mufajId', 'mufajId');
    }

    public function vetites()
    {
        return $this->hasMany(Vetites::class, 'filmId', 'filmId');
    }
}
