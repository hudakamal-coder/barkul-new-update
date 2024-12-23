<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'n_size',
        'price',
        'food_id',
       
    ];
    public function Eat(){
        return $this->belongsTo(Eat::class,'food_id');
    }
    }

