<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    

protected $fillable = [
    'user_id',
    'eat_id',
    'size_id'
    

    
];
public function User(){
    return $this->hasOne(User::class,'id','user_id');

}
public function Eat(){
    return $this->hasOne(Eat::class,'id','eat_id');

}
public function Size()
{
    return $this->hasOne(Size::class,'id','size_id');
}

}
