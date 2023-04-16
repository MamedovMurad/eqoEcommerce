<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart(){
       
        return view('front.cart.index');
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id'=>$id,
                "name" => $product->translate(App::getLocale())->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumb_image_1
            ];
        }
          
        session()->put('cart', $cart);
        // Session::flash('success', 'File has been uploaded successfully!');
        if ($request->ajax()) {
           return  ['html'=> view('front.widgets.mini_card')->render(),
                    'count'=>count($cart)]
           
           ;
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        $total=0;
        foreach($cart as $details){
            $total+=$details['price']*$details['quantity'];
        }
        if ($request->ajax()) {
            return ['html'=>view('front.widgets.productTable')->render(),
                    'total'=>$total];
         }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
          /*   dd(  $cart); */
        return redirect()->back()->with('success', 'Product removed successfully');
          //  session()->flash('success', 'Product removed successfully');
        }
    }
}
