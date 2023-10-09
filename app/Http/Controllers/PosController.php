<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function index(){
        $data=Product::all();

        $sum=Cart::sum(DB::raw('price*quantity'));
         $vat=   $sum*0.10;
        $subtotal=$sum+$vat;
        $cart=Cart::all();
     
        $customer=Customer::all();
        return view('pos.pos',compact('data','sum','vat','subtotal','cart','customer'));
    }



}
