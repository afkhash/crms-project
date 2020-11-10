<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use PDF;

class PdfController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function getAllCustomers()
    {
        $customers = Customer::all();
        return view('pdf.customerprint',compact('customers'));
    }

    public function downloadPDF()
    {
        $customers = Customer::all();
        $pdf = PDF::loadView('pdf.customerprint', compact('customers'));
        return $pdf->download('customers.pdf');
    }
    public function getAllProducts()
    {
        $products = Product::all();
        return view('pdf.productprint',compact('products'));
    }

    public function downloadPDFProducts()
    {
        $products = Product::all();
        $pdf = PDF::loadView('pdf.productprint', compact('products'));
        return $pdf->download('products.pdf');
    }
    public function getAllEmployees()
    {
        $employees = Employee::all();
        return view('pdf.employeeprint',compact('employees'));
    }

    public function downloadPDFEmployees()
    {
        $employees = Employee::all();
        $pdf = PDF::loadView('pdf.employeeprint', compact('employees'));
        return $pdf->download('employees.pdf');
    }
}