<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
   public function index(){
      $category = Category::latest()->paginate(3);
    return view('admin.category',compact('category'));
   }

   public function store(Request $request){
       Category::create([
         'category'=>$request->category,
       ]);
       return redirect()->back();
   }

   public function edit($id){
      $data=Category::findOrFail($id);
      return view('admin.editcategory',compact('data'));
   }

   public function update(Request $request,$id){
      
      Category::findOrFail($id)->update([
          'category'=>$request->category,
           
      ]);
      return redirect()->back();
   }
   
   public function destroy($id){
      Category::findOrFail($id)->delete();
      return redirect()->back();
}
}