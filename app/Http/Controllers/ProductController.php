<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anam\Phpcart\Cart;

class ProductController extends Controller
{

    public function index($product){

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(!isset($_SESSION['cart'])){
            $cart= new Cart();
            $_SESSION['cart'] = $cart;
        }

        return view('sample-product')->with('product', $product);

    }


    public function second(Request $product){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(!isset($_SESSION['cart'])){
            $cart= new Cart();
            $_SESSION['cart'] = $cart;
        }

        return view('sample-product-back')->with('product', $product->all());

    }




}

