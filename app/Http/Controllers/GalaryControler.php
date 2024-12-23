<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalaryControler extends Controller
{
  public function index(){
    return view('admin.galary');
  }
  
  public function store(Request $request){
    $validatedData = $request->validate([
        'image' => 'required|file|image|mimes:png,jpg,jpeg',
    ]);

   if ($request->hasFile('image')) {
       $path = $request->file('image')->store('photos','public');
        $validatedData['image'] = basename($path);   
   }
    Image::create($validatedData);
 return redirect()->back();
  }
}
 