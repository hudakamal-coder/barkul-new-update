<?php

namespace App\Http\Controllers;


use App\Models\Eat;
use App\Models\Size;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        
        $food = Eat::with('Size')->paginate(6);
        return view('admin.food',compact('food'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|file|image|mimes:png,jpg,jpeg',
            'price' => 'nullable',
            'has_size'=>'nullable'
        ]);
    
       if ($request->hasFile('image')) {
           $path = $request->file('image')->store('photos','public');
            $validatedData['image'] = basename($path);   
       }
        // Create the product with validated data
        Eat::create($validatedData);
        // Redirect back with a success message
     //   return redirect()->route('products.index')->with('success', 'Product created successfully.');
     return redirect()->back();
    }
    public function size($id){
        $food = Eat::findOrFail($id);
         return view('admin.size',compact('food'));
     }
 
     public function addsize(Request $request,$id){
        Size::create(
            [
                'food_id'=>$id,
                'n_size'=>$request->n_size,
                'price'=>$request->price,
                
            ]

         );
         return redirect()->back();
     }
}
