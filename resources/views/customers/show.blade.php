@extends('crudify::layouts.modal')

@section('title', __('Customer Information'))
@section('content')
    <div class="modal-body">
  
        @foreach($customer->getFillable() as $fillable)
        
            <h6 class="font-weight-bold mb-0">{{ Str::title(str_replace('tn', 't n', $fillable)) }}</h6>
            <div class="mb-3">
                @if(is_array($customer->$fillable))
                    <pre class="mb-0">{{ json_encode($customer->$fillable, JSON_PRETTY_PRINT) }}</pre>
                @elseif(in_array($fillable, $customer->getDates()))
                    @displayDate($customer->$fillable)
                @else
                    {{ $customer->$fillable ?? __('N/A') }}
                @endif
            </div>
        @endforeach
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i> Return</button>
    </div>
@endsection
