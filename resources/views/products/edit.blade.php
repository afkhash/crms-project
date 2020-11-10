@extends('crudify::layouts.modal')

@section('title', __('Edit Product'))
@section('content')
<x-form action="{{ route('products.edit', $product->id) }}" method="patch" crudify-form>
    <div class="modal-body">
        @bind($product)
        @include('products.form')
        @endbind
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i>
            Cancel</button>
        <button type="submit" class="btn btn-primary buttondesign"crudify-confirm="{{ __('Save changes?') }}"><i class="fas fa-save"></i> Save changes</button>
    </div>
</x-form>
@endsection