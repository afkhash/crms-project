<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'item' => $row['item'],
            'representative' => $row['representative'],
            'company' => $row['company'],
            'title' => $row['title'],
            'lastname' => $row['lastname'],
            'firstname' => $row['firstname'],
            'address' => $row['address'],
            'email' => $row['email'],
            //
        ]);
    }
}
