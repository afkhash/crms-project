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
            <h1 class="mb-md-0">{{ __('Customer Records') }}</h1>

        </div>
        <div class="col-md-auto">
            <div class="btn-group dropright">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Action Menu
                </button>

                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Create</h6>
                    <a class="dropdown-item file-mng" crudify-show-modal="{{ route('customers.create') }}"><i
                            class="fas fa-user-plus"></i>&nbspInsert record</a>
                    <a class="dropdown-item file-mng" href="/customer-csv-upload"><i class="fas fa-file-upload"></i></i>&nbsp Import CSV</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">File Management</h6>

                    <a class="dropdown-item file-mng" href="/get-all-customers"><i class="fas fa-print"></i>&nbspPrint
                        preview</a>

                    <a class="dropdown-item file-mng" href="/download-customers-pdf"><i
                            class="fas fa-file-pdf"></i>&nbsp Export to
                        PDF</a>
                    <a class="dropdown-item file-mng" href="/download-customers-excel"><i
                            class="fas fa-file-excel"></i>&nbsp Export to
                        XLSX</a>
                    <a class="dropdown-item file-mng" href="/download-customers-csv"><i
                            class="fas fa-file-csv"></i>&nbsp Export to
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

<div class="col-md">
    <p class=p-1></p>
    <h6 class="mb-md-0 text-center">{{ __('Customer Information System 2020') }}</h6>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush