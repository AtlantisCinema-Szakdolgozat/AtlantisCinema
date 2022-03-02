<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terem extends Model
{
    use HasFactory;
    protected $primaryKey='teremId';
    protected $fillable = ['teremNev','sor','oszlop'];
}
