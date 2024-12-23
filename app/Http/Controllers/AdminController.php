<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        return view('admin.index');
    }
   
    public function vieworder(){
      $order = Order::latest()->get(); 
        return view('admin.vieworder',compact('order'));
  }

  public function ontheway($id){
    $order = Order::find($id);
     $order->status = 'on the way' ;
       $order->save();
     return redirect('vieworder');
}
public function delivery($id){
    $order = Order::find($id);
     $order->status = 'delivery' ;
       $order->save();
     return redirect('vieworder');
}
}