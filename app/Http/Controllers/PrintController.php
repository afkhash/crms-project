<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use PDF;

class PrintController extends Controller
{
    public function getAllCustomers(){
        $customers = Customer::all();
        return view('customerprint',compact('customers'));
    }

    public function downloadPDF(){
        $customers = Customer::all();
        $pdf = PDF::loadView('customerprint', compact('customers'));
        return $pdf->download('customers.pdf');
    }
}
