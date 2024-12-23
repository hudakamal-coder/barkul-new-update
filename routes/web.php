<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryControler;
use App\Http\Controllers\FastController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GalaryControler;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\InformationControler;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SizeController;
use App\Models\Category;
use App\Models\Info;
use App\Models\Cart;
use App\Models\Image;
use App\Models\User;
use App\Models\Eat;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

 
Route::get('/',[HomeControler::class,'home'])->name('index');

Route::get('/menu',[HomeControler::class,'menu'])->name('menu');

Route::get('/eats',[HomeControler::class,'eats'])->name('eats');

Route::get('/fasts',[HomeControler::class,'fast'])->name('fasts');

Route::get('/galery',[HomeControler::class,'galary'])->name('galery');

Route::get('/search',[HomeControler::class,'search'])->name('search');

Route::get('/addcartfood/{id}',[HomeControler::class,'addcartfood'])->name('addcartfood')->middleware(['auth', 'verified']);

Route::get('/addcart/{id}',[HomeControler::class,'addcart'])->name('addcart')->middleware(['auth', 'verified']);

Route::get('/addcart2/{id}',[HomeControler::class,'addcart2'])->name('addcart2')->middleware(['auth', 'verified']);

Route::get('/mycart',[HomeControler::class,'mycart'])->name('mycart')->middleware(['auth', 'verified']);
 
Route::post('deletecart/{id}',[HomeControler::class,'deletecart'])->name('deletecart')->middleware(['auth', 'verified']);

Route::resource('myorder',OrderController::class)->middleware(['auth', 'verified']);   

Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('auth','admin');

Route::get('/vieworder',[AdminController::class,'vieworder'])->name('vieworder')->middleware('auth','admin');

Route::get('/ontheway/{id}',[AdminController::class,'ontheway'])->name('ontheway')->middleware('auth','admin');

Route::get('/delivery/{id}',[AdminController::class,'delivery'])->name('delivery')->middleware('auth','admin');

Route::resource('/category',CategoryControler::class)->middleware('auth','admin');

Route::resource('/food',FoodController::class)->middleware('auth','admin');

Route::resource('/fast',FastController::class)->middleware('auth','admin');

Route::get('foodsize/{id}',[FoodController::class,'size'])->name('foodsize')->middleware(['auth', 'admin']);

Route::post('addsize/{id}',[FoodController::class,'addsize'])->name('addsize')->middleware(['auth', 'verified']);


Route::resource('/size',SizeController::class)->middleware('auth','admin');

 
 
Route::resource('/information',InformationControler::class)->middleware('auth','admin');

Route::resource('/galary',GalaryControler::class)->middleware('auth','admin');





Route::get('/dashboard', function () {
    
    $category = category::all();
    $info = info::all();
    if(Auth::id()){
        $user = Auth::user();
        $userid = $user->id;
        $count = cart::where('user_id',$userid)->count();
      }
      else{
        $count = 0;
      }
    return view('home.index',compact('category','info','count'));
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
