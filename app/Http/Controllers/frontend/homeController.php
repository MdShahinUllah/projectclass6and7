<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $products = product::orderBy('id','desc')->paginate(8);

        return view('frontend.home',compact('products'));
    }



    public function productDetail($id){
        $product = product::find($id);
        return view('frontend.product-detail',compact('product'));
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function contactUs2(){
        return view('frontend.contact-us-2');
    }
}
