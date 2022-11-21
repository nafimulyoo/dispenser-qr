<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispense extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIM',
        'water_usage',
    ];
}
