@extends('crudify::layouts.modal')

@section('title', __('Employee'))
@section('content')
    <div class="modal-body">
        @foreach($employee->getFillable() as $fillable)
            <h6 class="font-weight-bold mb-0">{{ Str::title(str_replace('_', ' ', $fillable)) }}</h6>
            <div class="mb-3">
                @if(is_array($employee->$fillable))
                    <pre class="mb-0">{{ json_encode($employee->$fillable, JSON_PRETTY_PRINT) }}</pre>
                @elseif(in_array($fillable, $employee->getDates()))
                    @displayDate($employee->$fillable)
                @else
                    {{ $employee->$fillable ?? __('N/A') }}
                @endif
            </div>
        @endforeach
    </div>

    <div class="modal-footer">
    <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i> Return</button>
    </div>
@endsection
