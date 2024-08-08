<?php

use App\Http\Controllers\MemberController;
use App\Models\registers;
use App\Models\tests;
use App\Models\User;
use App\Models\product;
use App\Http\Controllers\productsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\IsFalse;

Route::get('/', function (){
    return view('welcome');
});

Route::get('hello', function () {
    return response("<h1>hello world</h1>",200)
    ->header('content-Type','text/plain');
});

// // Registration routes
// Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'RegisterController@register')->name('register');

// // Login routes
// Route::get('login', 'LoginController@showLoginForm')->name('login');
// Route::post('login', 'LoginController@login')->name('login');

Route::get('/register',function(){
    return view('register');
});

Route::post('/register',function(Request $request){
    $data=registers::where('name','=',$request->name)->get();
    
    if (count($data)>0) {
        return redirect('/register')->with('register','name already exist');
    }else{
        $insert=new registers();
        $insert->name=$request->name;
        $insert->email=$request->email;
        $insert->password=Hash::make($request->password);
        $insert->save();
        return redirect('/register')->with('register','register success');
    }
});

Route::get('/login',function(){
    return view('login');
});

Route::post('/login',function(Request $request){
    $data=registers::where('email','=',$request->email)->get();
    if (count($data)===1) {
        if (Hash::check($request->password,$data[0]->password)) {
            return redirect('/login')->with('login','login success');
        }else {
            return redirect('/login')->with('logins','password wrong');
        }
    }else{
        return redirect('/login')->with('logins','didt have account');
    }
});

Route::get('/userseeder',[MemberController::class,"show"]);
// routes/web.php
Route::get('/test',function(){
    return view('test');
});
Route::get('/test',[TestsController::class,"create"]);
Route::get('/test',[TestsController::class,"store"]);
Route::get('/test2login',function(){
    return view('test2login');
});
Route::get('/email',function(){
    return view('email');
});
Route::get('/main',function(){
    return view('main');
});
Route::get('/main',[productsController::class,"main"]);
Route::get("{products}/editproduct", [productsController::class, 'editproduct']);
Route::post("/addproduct", [productsController::class, 'store']);
Route::put("/edit/{product}", [productsController::class, 'edit']);
Route::delete("/delete/{id}", [productsController::class, 'delete']);
