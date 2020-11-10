<div class="text-md-right text-nowrap">
    <button type="button" class="btn btn-link p-1" title="{{ __('Show') }}" crudify-show-modal="{{ route('employees.show', $id) }}">
    <i class="fas fa-user-tie img-zoom"></i>
    </button>

    <button type="button" class="btn btn-link p-1" title="{{ __('Edit') }}" crudify-show-modal="{{ route('employees.edit', $id) }}">
    <i class="fas fa-user-edit img-zoom"></i>
    </button>

    <x-form action="{{ route('employees.destroy', $id) }}" method="delete" class="d-inline-block" crudify-form>
        <button type="submit" class="btn btn-link p-1" title="{{ __('Delete') }}" crudify-confirm="{{ __('Delete employee #')}} {{ __($id)}} {{ __($last_name)}}, {{ __($first_name)}} ?">
        <i class="fas fa-user-times img-zoom"></i>
        </button>
    </x-form>
</div>
