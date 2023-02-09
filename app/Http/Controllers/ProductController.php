<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addMoreProduct()
    {
        return view('productForm');
    }
    function storeProduct(Request $request)
    {
        
        foreach ($request->addProduct as $key => $value) {
        Product::create($value);
        //dd($value);
        }
        return back()->with('success', 'Record Created Successfully.');
    }
}
