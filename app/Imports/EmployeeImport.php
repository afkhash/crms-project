<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'last_name' => $row['last_name'],
            'first_name' => $row['first_name'],
            'address' => $row['address'],
            'email' => $row['email'],
            'job' => $row['job'],
            'salary' => $row['salary'],
            'office' => $row['office'],
            'reports_to' => $row['reports_to'],
        ]);
    }
}
