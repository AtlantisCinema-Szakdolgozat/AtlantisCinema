<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vetites extends Model
{
    
    use HasFactory;
    protected $table='vetites';
    protected $primaryKey='vetitesId';
    protected $fillable = ['teremId','filmId','felirat','szinkron','vetitesNap','kezdesiIdo','teljesJegyar','premier','publikus'];
}
