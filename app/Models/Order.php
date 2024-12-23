<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_id',
        'name',
        'address',
        'phone',  
    ];
    public function User(){
        return $this->hasOne(User::class,'id','user_id');

    }
    public function item(){
        return $this->hasOne(Item::class,'id','item_id');

    }
}
