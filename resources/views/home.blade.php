@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white"> System Management </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accusoft Cloud Computing Services
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                        Accusoft Cloud Computing Services is a Customer Relationship Management (CRM) System that enables 
                                        the user to do all CRUD operations on three (3) major tables: Employee List, Customer Records, and Company Inventory.  
                                        It implements DataTables for searching, sorting, and pagination.  For file management, it has Portable Document Format (pdf), 
                                        Comma-separated Values (csv), and XML spreadsheet (xlsx) export and csv import option.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a><?php echo( "<button class = 'btn btn-light buttondesign' onclick= \"location.href='/customers'\"><strong><i class='fas fa-user-tag'></i> Customer Records </strong> </button>");?></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a><?php echo( "<button class = 'btn btn-light buttondesign' onclick= \"location.href='/products'\"><strong>  <i class='fas fa-shopping-cart'></i> Company Inventory </strong> </button>");?></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a><?php echo( "<button class = 'btn btn-light buttondesign' onclick= \"location.href='/employees'\"><strong><i class='fas fa-user-tie'></i> Employee List </strong> </button>");?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Insert Record
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            To insert a new record, click on the Action Menu found in each table. Fill in the modal with correct information to save it.  
                                            The record will not be saved if there is an invalid input or empty field.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    crudify-show-modal="{{ route('customers.create') }}"><i
                                                        class="fas fa-user-plus"></i>&nbsp<strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">

                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    crudify-show-modal="{{ route('products.create') }}"><i
                                                        class="fas fa-shopping-cart"></i>&nbsp<strong>Inventory</strong></a>

                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    crudify-show-modal="{{ route('employees.create') }}"><i
                                                        class="fas fa-user-tie"></i>&nbsp<strong>Employees</strong></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Import CSV
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Upload massive amount of data or existing exported .csv files by importing it. It can be accessed in
                                            the dashboard or in the File Management division in the Action Menu.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/customer-csv-upload"><i
                                                        class="fas fa-file-upload"></i></i>&nbsp
                                                    <strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/product-csv-upload"><i
                                                        class="fas fa-file-upload"></i></i>&nbsp
                                                    <strong>Inventory</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/employee-csv-upload"><i
                                                        class="fas fa-file-upload"></i></i>&nbsp<strong>Employees</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Print Preview
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Click on the File Management division in the Action Menu to preview the file before
                                            exporting it as .df, .xlsx, or .csv file.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/get-all-customers"><i
                                                        class="fas fa-print"></i>&nbsp<strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/get-all-products"><i
                                                        class="fas fa-print"></i>&nbsp<strong>Inventory</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/get-all-employees"><i
                                                        class="fas fa-print"></i>&nbsp<strong>Employees</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                Export PDF
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            For the purpose of preserving data, the user can export each of the table as a .pdf file.
                                            It is accessed in the File Management division in Action Menu.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-customers-pdf"><i
                                                        class="fas fa-file-pdf"></i>&nbsp<strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-products-pdf"><i
                                                        class="fas fa-file-pdf"></i>&nbsp<strong>Inventory</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-employees-pdf"><i
                                                        class="fas fa-file-pdf"></i>&nbsp<strong>Employees</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                                Export XLSX
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                           In addition to that, the tables can be exported as .xlsx that can be opened in Spreadsheet programs.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-customers-excel"><i
                                                        class="fas fa-file-excel"></i>&nbsp<strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-products-excel"><i
                                                        class="fas fa-file-excel"></i>&nbsp<strong>Inventory</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign"
                                                    href="/download-employees-excel"><i
                                                        class="fas fa-file-excel"></i>&nbsp<strong>Employees</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                                Export CSV
                                            </button>   
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            To export the data as .csv file, click on the Import CSV found in the Action Menu.
                                            <hr>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign" href="/download-customers-csv"><i
                                                        class="fas fa-file-csv"></i>&nbsp<strong>Customers</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign" href="/download-products-csv"><i
                                                        class="fas fa-file-csv"></i>&nbsp<strong>Inventory</strong></a>
                                            </div>
                                            <div class="col-sm-12">
                                                <a class="dropdown-item btn btn-dark buttondesign" href="/download-employees-csv"><i
                                                        class="fas fa-file-csv"></i>&nbsp<strong>Employees</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h6> Features </h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/insert.png')}}" alt="Card image"
                            style="height:100%">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/update.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/delete.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">




            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/search.png')}}" alt="Card image"
                            style="height:100%">
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/sort.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/auth.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">




            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/laravel.png')}}" alt="Card image"
                            style="height:100%">
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/crudify.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width:220px">
                        <img class="card-img-top pic-zoom" src="{{asset('/images/files.png')}}" alt="Card image"
                            style="width:100%">
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</div>
<p class="text-center py-4"> <a href=#> Back to top</a> </p>


@endsection