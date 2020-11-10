<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
class PrintController2 extends Controller
{
    public function getAllEmployees(){
        $employees = Employee::all();
        return view('employeeprint',compact('employees'));
    }

    public function downloadPDFEmployees(){
        $employees = Employee::all();
        $pdf = PDF::loadView('employeeprint', compact('employees'));
        return $pdf->download('employees.pdf');
    }
}
