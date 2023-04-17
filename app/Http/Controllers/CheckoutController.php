<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
       
        return view('front.checkout.index');
    }
    
    public function add_order(OrderRequest $request){
        $requests=$request->all();
        $product = Order::create($requests);
       
      
        if ($request->filled('product_orders')) {
            $product->product_orders()->sync($request->product_orders);
        }
      
    }
}
