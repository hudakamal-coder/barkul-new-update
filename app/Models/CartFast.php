<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartFast extends Model
{
    use HasFactory;
    
protected $fillable = [
    'user_id',
     'fast_id',
    
    

    
];
public function User(){
    return $this->hasOne(User::class,'id','user_id');

}
public function Fast(){
    return $this->hasOne(Fast::class,'id','fast_id');

}
}
