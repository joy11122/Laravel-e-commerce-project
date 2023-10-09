<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;

class CartController extends Controller
{
    public function index(){
        $data=Cart::paginate(15);

        $customer=Customer::all();
        return view('pos.pos',compact('data','customer'));
    }
    public function store($id, Request $request){
                $data=Product::findOrfail($id);


              if(Cart::where('product_id',$id)->increment('quantity')){

                return redirect ('pos')->with('message',"Added to Cart");
              }else{
                $cart=new cart;
                $cart->product_id=$data->id;
                $cart->name=$data->name;
                $cart->title=$data->title;
                $cart->price=$data->price;
                $cart->image=$data->image;
                $cart->save();
                return redirect ('pos')->with('message',"Added to Cart");;

              }

    }
 public function minus($id, Request $request){

$data=Cart::findOrfail($id);
$data->decrement('quantity');
$data->save();
dd('done');
 }
}
