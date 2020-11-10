@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show mx-auto" role="alert" style="width:72%">
    <strong>Import successful!</strong> Check the table below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container">
    <div class="row align-items-center mb-3">
        <div class="col-md">
            <h1 class="mb-md-0">{{ __('Inventory') }}</h1>
        </div>
        <div class="col-md-auto">

        </div>
        <div class="col-md-auto">

            <div class="btn-group dropright">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Action Menu
                </button>

                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Create</h6>
                    <a class="dropdown-item file-mng" crudify-show-modal="{{ route('products.create') }}"><i
                            class="fas fa-shopping-cart"></i>&nbspInsert record</a>
                            <a class="dropdown-item file-mng" href="/product-csv-upload"><i class="fas fa-file-upload"></i></i>&nbsp Import CSV</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">File Management</h6>
                    <a class="dropdown-item file-mng" href="/get-all-products"><i class="fas fa-print"></i>&nbspPrint
                        preview</a>
                    <a class="dropdown-item file-mng" href="/download-products-pdf"><i class="fas fa-file-pdf"></i>&nbsp Export to
                        PDF</a>
                        <a class="dropdown-item file-mng" href="/download-products-excel"><i class="fas fa-file-excel"></i>&nbsp Export to
                        XLSX</a>
                        <a class="dropdown-item file-mng" href="/download-products-csv"><i class="fas fa-file-csv"></i>&nbsp Export to
                        CSV</a>
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush