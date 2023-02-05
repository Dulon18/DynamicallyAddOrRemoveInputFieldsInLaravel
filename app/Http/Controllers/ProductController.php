<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addMoreProduct()
    {
        return view('productForm');
    }
}
