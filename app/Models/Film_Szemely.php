<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film_Szemely extends Model
{
    use HasFactory;
    protected $primaryKey=['filmId','szemelyId'];
    public $incrementing = false;
}
