<?php

namespace App\Http\DataTables;

use App\Models\Product;
use Redbastie\Crudify\Traits\BuildsTables;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    use BuildsTables;

    protected $model = Product::class;

    public function dataTable($query)
    {
        return $this->dataTables($query)->editColumn('action', 'products.action');
    }

    public function query(Product $product)
    {
        return $product->newQuery();
    }

    public function html()
    {
        return $this->tableBuilder()->orderBy(0, 'desc');
    }

    protected function getColumns()
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('item'),
            Column::make('brand'),
            Column::make('quantity'),
            Column::make('warehouse')->title('Barcode'),
            Column::make('created_at')->title('Bought'),
            Column::computed('action')->title('Options'),
        ];
    }
}
