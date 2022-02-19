<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szek extends Model
{
    use HasFactory;
    protected $primaryKEY=['sor','oszlop','vetítésid'];
}
