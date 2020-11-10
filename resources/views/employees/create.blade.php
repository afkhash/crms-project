@extends('crudify::layouts.modal')

@section('title', __('Create Employee'))
@section('content')
    <x-form action="{{ route('employees.create') }}" crudify-form>
        <div class="modal-body">
            @include('employees.form')
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-dark buttondesign" data-dismiss="modal"><i class="fas fa-arrow-left"></i> Not now</button>
            <button type="submit" class="btn btn-primary buttondesign"><i class="fas fa-save"></i> Save</button>
        </div>
    </x-form>
@endsection
