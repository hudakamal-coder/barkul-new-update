<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;

class FastController extends Controller
{
    public function index(){
        
        $fast = Fast::paginate(6);
        return view('admin.fast',compact('fast'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'nullable',
            'big'=> 'nullable',
            'medium'=> 'nullable',
            'small'=> 'nullable',
            'image' => 'required|file|image|mimes:png,jpg,jpeg',
           
           
        ]);
    
       if ($request->hasFile('image')) {
           $path = $request->file('image')->store('photos','public');
            $validatedData['image'] = basename($path);   
       }
        // Create the product with validated data
        Fast::create($validatedData);
        // Redirect back with a success message
     //   return redirect()->route('products.index')->with('success', 'Product created successfully.');
     return redirect()->back();
    }

    public function edit($id){
        $data=Fast::findOrFail($id);
        return view('admin.EditFast',compact('data'));
     }
  
    
     
     public function destroy($id){
        Fast::findOrFail($id)->delete();
        return redirect()->back();
  }


}