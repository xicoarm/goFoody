<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($product){


        $_SESSION['prodname'] = $product;


        return view('sample-product')->with('product', $product);

    }


    public function second(Request $product){


        return view('sample-product-back')->with('product', $product->all());

    }




}

