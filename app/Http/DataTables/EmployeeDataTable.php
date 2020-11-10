<?php

namespace App\Http\DataTables;

use App\Models\Employee;
use Redbastie\Crudify\Traits\BuildsTables;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class EmployeeDataTable extends DataTable
{
    use BuildsTables;

    protected $model = Employee::class;

    public function dataTable($query)
    {
        return $this->dataTables($query)->editColumn('action', 'employees.action');
    }

    public function query(Employee $employee)
    {
        return $employee->newQuery();
    }

    public function html()
    {
        return $this->tableBuilder()->orderBy(0, 'desc');
    }

    protected function getColumns()
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('last_name'),
            Column::make('first_name'),
            Column::make('address'),
            Column::make('email'),
            Column::make('job'),
            Column::make('salary'),
            Column::make('office'),
            Column::make('reports_to'),
            Column::computed('action')->title('Options'),
        ];
    }
}
