<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;
class PrintController1 extends Controller
{
    public function getAllProducts(){
        $products = Product::all();
        return view('productprint',compact('products'));
    }

    public function downloadPDFProducts(){
        $products = Product::all();
        $pdf = PDF::loadView('productprint', compact('products'));
        return $pdf->download('products.pdf');
    }
}
