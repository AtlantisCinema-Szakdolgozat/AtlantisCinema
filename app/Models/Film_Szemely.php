<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film_Szemely extends Model
{
    use HasFactory;
    protected $primaryKEY=['filmid','szemelyid'];
}
