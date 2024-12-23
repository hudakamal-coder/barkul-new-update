<?php

namespace App\Http\Controllers;

use App\Models\eat;
use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $food = eat::all();
        return view('admin.size',compact('food'));
    }
    public function store(Request $request,$id)
    {
         size::create([
            'n_size'=>$request->n_size,
            'price'=>$request->price,
            'food_id'=>$request->food_id,
           ]);
         
     return redirect()->back(); 
    
    
        }}