<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection,WithHeadings
{
    public function headings():array {
        return [
'id',
'last_name',
'first_name',
'address',
'email',
'job',
'salary',
'office',
'reports_to',

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Employee::all();
        return collect(Employee::getEmployeecsv());
    }
}