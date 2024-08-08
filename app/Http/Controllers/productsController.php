<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function main(){
        return view("products",[
            "products"=>product::all(),
        ]);
    }

    public function editproduct(product $products){
        return view("editproduct",[
            'product'=>$products
        ]);
    }

    public function store(Request $request){
        $formFields=$request->validate([
            "p_name"=>"required",
            "qty"=>"required",
            "price"=>"required",
        ]);

        product::create($formFields);
        return back()->with("message","add product success");
    }

    public function edit(Request $request,product $product){
        $formFields=$request->validate([
            "p_name"=>"required",
            "qty"=>"required",
            "price"=>"required",
        ]);

        $product->update($formFields);
       
        return redirect("/main")->with("message","edit product success");
    }

    public function delete(Request $request,product $id){
        $id->delete();
        return back()->with("message","product delete success");
    }

}
