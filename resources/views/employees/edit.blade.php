@extends('crudify::layouts.modal')

@section('title', __('Edit Employee'))
@section('content')
<x-form action="{{ route('employees.edit', $employee->id) }}" method="patch" crudify-form>
    <div class="modal-body">
        @bind($employee)
        @include('employees.form')
        @endbind
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i>
            Cancel</button>
        <button type="submit" class="btn btn-primary buttondesign "crudify-confirm="{{ __('Save changes?') }}"><i class="fas fa-save"></i> Save changes</button>
    </div>
</x-form>
@endsection