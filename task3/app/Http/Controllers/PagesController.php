<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

   public function add(){
       return view ('add');
   }

   public function addSubmit(Request $request){
       $validate=$request->validate([
        'name'=>'required|max:20|',
        'price'=>'required|max:10',
        'quantity'=>'required',
        'des'=>'required',
        
       ]);

      $var=new Product();
      $var->Name=$request->name;
      $var->Price=$request->price;
      $var->Quantity=$request->quantity;
      $var->Description=$request->des;
      $var->save();


      
      return redirect()->route('view_product');

   }

   public function list(){
     $products=Product::all();
     return view('productlist')->with('products',$products);

   }

   public function edit(Request $request){

    $ID=$request->id;
    $product = Product::where('id',$ID)->first();
     return view('edit')->with('product',$product);

}


public function editSubmit(Request $request){
    $var = Product::where('id',$request->id)->first();
    $var->Name=$request->name;
    $var->Price=$request->price;
    $var->Quantity=$request->quantity;
    $var->Description=$request->des;
    $var->save();
    return redirect()->route('view_product');

}

public function Delete(){
    return view('delete');
}


public function DeleteSubmit(Request $req){
   $var = Product::where('id',$req->id)->first();
   $var->delete();
   return redirect()->route('view_product');
}

}
