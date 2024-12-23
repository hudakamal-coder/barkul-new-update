<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\CartFast;
use App\Models\Category;
use App\Models\Eat;
use App\Models\Fast;
use App\Models\Image;
use App\Models\Info;
use App\Models\Order;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControler extends Controller
{
    public function home(){
        
        $category = Category::all();
        $info = Info::all();
        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = CartFast::where('user_id',$userid)->count();
          }
          else{
            $count = 0;
          }
          
       return view('home.index',compact('category','info','count'));
    }

    
  

    public function galary(){
       $image= Image::all();
       if(Auth::id()){
        $user = Auth::user();
        $userid = $user->id;
        $count = CartFast::where('user_id',$userid)->count();
      }
      else{
        $count = 0;
      }
        return view('home.galary',compact('image','count'));
    }
   
public function search(Request $request){
    $search = $request->search;
    $item = Eat::where('name','LIKE','%'.$search.'%')->get();
     return view('home.menu',compact('item'));
    }



    public function fast(){
      $fast = Fast::paginate(6);
      $info=Info::all();
      if(Auth::id()){
        $user = Auth::user();
        $userid = $user->id;
        $count = CartFast::where('user_id',$userid)->count();
      }
      else{
        $count = 0;
      }
      return view('home.fast',compact('fast','info','count'));
    }



   public function addcartfood($id){
    $fast_id = $id;
    $user = Auth::user();
    $user_id = $user->id;
    CartFast::create([
       'user_id'=>$user_id,
       'fast_id'=>$fast_id,
   ]); 
   return redirect()->back();
   }

    public function addcart($id){
         $eat_id = $id;
         $user = Auth::user();
         $user_id = $user->id;
         cart::create([
            'user_id'=>$user_id,
            'eat_id'=>$eat_id,
        ]); 
        return redirect()->back();
        }
       
        public function addcart2($id){
          $size_id = $id;
          $user = Auth::user();
          $user_id = $user->id;
          cart::create([
             'user_id'=>$user_id,
             'size_id'=>$size_id,
         ]); 
         return redirect()->back();
         }
  






         
        public function mycart(){
             $fast= Fast::all();
            $info = Info::all();
            if(Auth::id()){
                $user = Auth::user();
                $userid = $user->id;
                $count = CartFast::where('user_id',$userid)->count();
              //  $cart = Cart::with(['user', 'eat','size'])->get();
                $cart = CartFast::where('user_id',$userid)->get();
              }
              else{
                $count = 0;
              }
            return view('home.mycart',compact('info','count','cart','fast'));
        }







        public function deletecart($id){
            CartFast::findOrFail($id)->delete();
            return redirect()->back();
         }
   


        public function eats(){
          $eat = Eat::with('Size')->paginate(6);
          $info=Info::all();
          if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = cart::where('user_id',$userid)->count();
          }
          else{
            $count = 0;
          }
          return view('home.food',compact('eat','info','count'));
        }
          
           
      }
    

