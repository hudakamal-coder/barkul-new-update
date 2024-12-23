<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eat extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'image',
        'price',
        'has_size',
       
    ];
    public function Size(){
        return $this->hasMany(Size::class,'food_id');
    }
}
