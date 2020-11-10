<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection,WithHeadings
{
    public function headings():array {
        return [
'id',
'item',
'representative',
'company',
'title',
'lastname',
'firstname',
'address',
'email',

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Customer::all();
        return collect(Customer::getCustomercsv());
    }
}
