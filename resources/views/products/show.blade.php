@extends('crudify::layouts.modal')

@section('title', __('Product'))
@section('content')
<div class="modal-body">
    @foreach($product->getFillable() as $fillable)
    <h6 class="font-weight-bold mb-0">{{ Str::title(str_replace('_', ' ', $fillable)) }}</h6>
    <div class="mb-3">
        @if(is_array($product->$fillable))
        <pre class="mb-0">{{ json_encode($product->$fillable, JSON_PRETTY_PRINT) }}</pre>
        @elseif(in_array($fillable, $product->getDates()))
        @displayDate($product->$fillable)
        @else
        {{ $product->$fillable ?? __('N/A') }}
        @endif
    </div>
    @endforeach
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i>
        Return</button>
</div>
@endsection