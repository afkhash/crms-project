<?php

namespace App\Http\Controllers;

use App\Http\DataTables\CustomerDataTable;
use App\Models\Customer;
use App\Exports\CustomerExport;
use App\Imports\CustomerImport;
use Excel;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(CustomerDataTable $customerDataTable)
    {
        return $customerDataTable->render('customers.index');
    }

    public function getCreate()
    {
        return view('customers.create');
    }

    public function postCreate()
    {
        request()->validate(Customer::rules());

        Customer::query()->create(request()->all());
        
        return response()->json([    
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
        
    }

    public function getShow(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function getEdit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function patchEdit(Customer $customer)
    {
        request()->validate(Customer::rules($customer));

        $customer->update(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
        
    }

    public function deleteDestroy(Customer $customer)
    {
        $customer->forceDelete();

        return response()->json([
            'reload_table' => true,
        ]);
    }
    public function excelCustomer()
    {
        return Excel::download(new CustomerExport,'customers.xlsx');
    }
    
    public function csvCustomer()
    {
        return Excel::download(new CustomerExport,'customers.csv');
    }
    public function importForm()
    {
        return view('csv.customer-csv');
    }
    public function import(Request $request)
    {
        Excel::import(new CustomerImport,$request->file);
        return redirect('customers')->with('status','msg');
    }
}
