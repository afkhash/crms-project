<?php

use Illuminate\Support\Facades\Route;
use Redbastie\Crudify\Helpers\AutoRoute;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PdfController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
AutoRoute::controller('customers', \App\Http\Controllers\CustomerController::class);
AutoRoute::controller('products', \App\Http\Controllers\ProductController::class);
AutoRoute::controller('employees', \App\Http\Controllers\EmployeeController::class);

Route::get('get-all-customers',[PdfController::class,'getAllCustomers']);
Route::get('download-customers-pdf',[PdfController::class,'downloadPDF']);
Route::get('download-customers-excel',[CustomerController::class,'excelCustomer']);
Route::get('download-customers-csv',[CustomerController::class,'csvCustomer']);
Route::get('customer-csv-upload',[CustomerController::class, 'importForm']);
Route::post('customer-csv-import',[CustomerController::class,'import'])->name('customer.import');
Route::get('customer-csv-import', function(){
    return view('errors.illustrated-layout');
 });

Route::get('get-all-products',[PdfController::class,'getAllProducts']);
Route::get('download-products-pdf',[PdfController::class,'downloadPDFProducts']);
Route::get('download-products-excel',[ProductController::class,'excelProduct']);
Route::get('download-products-csv',[ProductController::class,'csvProduct']);
Route::get('product-csv-upload',[ProductController::class, 'importForm']);
Route::post('product-csv-import',[ProductController::class, 'import'])->name('product.import');
Route::get('product-csv-import', function(){
   return view('errors.illustrated-layout');
});

Route::get('get-all-employees',[PdfController::class,'getAllEmployees']);
Route::get('download-employees-pdf',[PdfController::class,'downloadPDFEmployees']);
Route::get('download-employees-excel',[EmployeeController::class,'excelEmployee']);
Route::get('download-employees-csv',[EmployeeController::class,'csvEmployee']);
Route::get('employee-csv-upload',[EmployeeController::class, 'importForm']);
Route::post('employee-csv-import',[EmployeeController::class, 'import'])->name('employee.import');
Route::get('employee-csv-import', function(){
    return view('errors.illustrated-layout');
 });

