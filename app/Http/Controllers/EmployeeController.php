<?php

namespace App\Http\Controllers;

use App\Http\DataTables\EmployeeDataTable;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Excel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(EmployeeDataTable $employeeDataTable)
    {
        return $employeeDataTable->render('employees.index');
    }

    public function getCreate()
    {
        return view('employees.create');
    }

    public function postCreate()
    {
        request()->validate(Employee::rules());

        Employee::query()->create(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function getShow(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function getEdit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function patchEdit(Employee $employee)
    {
        request()->validate(Employee::rules($employee));

        $employee->update(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function deleteDestroy(Employee $employee)
    {
        $employee->forceDelete();

        return response()->json([
            'reload_table' => true,
        ]);
    }
    public function excelEmployee()
    {
        return Excel::download(new EmployeeExport,'employees.xlsx');
    }
    
    public function csvEmployee()
    {
        return Excel::download(new EmployeeExport,'employees.csv');
    }
    public function importForm()
    {
        return view('csv.employee-csv');
    }
    public function import(Request $request)
    {
        Excel::import(new EmployeeImport,$request->file);
        return redirect('employees')->with('status','msg');
    }
}
