<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;
    protected $fillable = [
        'location1',
        'number1',
        'number2',
        'location2',
        'number3',
        'number4',
        
    ];

}
