<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InformationControler extends Controller
{
    public function index(){
        return view('admin.information');
    }

    public function store(Request $request){
         Info::create([
            'location1'=>$request->location1,
            'number1'=>$request->number1,
            'number2'=>$request->number2,
            'location2'=>$request->location2,
            'number3'=>$request->number3,
            'number4'=>$request->number4,
         ]);
         return redirect()->back();
    }
}
