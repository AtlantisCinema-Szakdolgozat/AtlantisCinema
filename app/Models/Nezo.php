<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nezo extends Model
{
    use HasFactory;
    protected $primaryKey='nezoId';
    protected $fillable = ['nezoId','nev','email'];

    protected $table='nezos';
    public $timestamps=false;
}
