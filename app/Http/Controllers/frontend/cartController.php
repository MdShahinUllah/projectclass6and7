<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function store($id){
       $product = product::findorfail($id);
       $cart = session()->has('cart') ? session()->get('cart') : [];
    //    \session()-> forget('cart');

       if (array_key_exists($product->id, $cart)){
           $cart[$product->id]['quantity']++;
       }else{
           $cart[$product->id]=[
               'product_id'=>$product->id,
               'title'=>$product->name,
               'quantity'=>1,
               'price'=>$product->price,
               'photo'=>$product->photo,
           ];
       }
        session(['cart'=>$cart]);
        return redirect()->back();
    }
    public function checkout(){
        $cart = session()->has('cart') ? session()->get('cart') : [];
        return view('frontend.order.checkout',compact('cart'));
    }

    public function PlaceOrder(){
        return view('frontend.order.placeOrder');
    }


}
