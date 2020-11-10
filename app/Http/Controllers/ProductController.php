<?php

namespace App\Http\Controllers;

use App\Http\DataTables\ProductDataTable;
use App\Models\Product;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Excel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(ProductDataTable $productDataTable)
    {
        return $productDataTable->render('products.index');
    }

    public function getCreate()
    {
        return view('products.create');
    }

    public function postCreate()
    {
        request()->validate(Product::rules());

        Product::query()->create(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function getShow(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function getEdit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function patchEdit(Product $product)
    {
        request()->validate(Product::rules($product));

        $product->update(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function deleteDestroy(Product $product)
    {
        $product->forceDelete();

        return response()->json([
            'reload_table' => true,
        ]);
    }
    public function excelProduct()
    {
        return Excel::download(new ProductExport,'products.xlsx');
    }
    
    public function csvProduct()
    {
        return Excel::download(new ProductExport,'products.csv');
    }
    public function importForm()
    {
        return view('csv.product-csv');
    }
    public function import(Request $request)
    {
        Excel::import(new ProductImport,$request->file);
        return redirect('products')->with('status','msg');
    }
}
