<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Image;
use App\Models\Info;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
     public function index(){
      
        $order= Order::all();
        $category = Category::all();
        $info = Info::all();
        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = cart::where('user_id',$userid)->count();
            $cart = Cart::where('user_id',$userid)->get();
          }
          else{
            $count = 0;
          }
          return view('home.order',compact('category','info','count','cart','order'));
     }
   
     public function store(Request $request){
        $user = Auth::user();
        $userid = $user->id;
        $cartItems = Cart::where('user_id', $userid)->get();
        foreach ($cartItems as $cartItem) {
            $cartItem->item_id;
        $order = Order::create([
            'user_id' => $userid,
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'item_id'=>$cartItem->item_id,
            
        ]);  
        $order=Order::all();
        Cart::where('user_id', $userid)->delete(); 
    }
        return redirect()->back();    
     }
}
