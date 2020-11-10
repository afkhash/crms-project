<?php

namespace App\Http\DataTables;

use App\Models\Customer;
use Redbastie\Crudify\Traits\BuildsTables;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CustomerDataTable extends DataTable
{
    use BuildsTables;

    protected $model = Customer::class;

    public function dataTable($query)
    {
        return $this->dataTables($query)->editColumn('action', 'customers.action');
    }

    public function query(Customer $customer)
    {
        return $customer->newQuery();
    }

    public function html()
    {
        return $this->tableBuilder()->orderBy(0, 'desc');
    }

    protected function getColumns()
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('item')->title('Item'),
            Column::make('representative'),
            Column::make('company'),
            Column::make('title'),
            Column::make('lastname')->title('Last Name'),
            Column::make('firstname')->title('First Name'),
            Column::make('address'),
            Column::make('email'),
            Column::computed('action')->title('Options'),//Options ay colum header for view update delete
        ];
    }
}
