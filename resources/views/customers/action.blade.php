<div class="text-md-right text-nowrap">
    <button type="button" class="btn btn-link p-1" title="{{ __('View') }}"
        crudify-show-modal="{{ route('customers.show', $id) }}">
        <i class="fas fa-user-tag img-zoom"></i>
    </button>

    <button type="button" class="btn btn-link p-1" title="{{ __('Update') }}"
        crudify-show-modal="{{ route('customers.edit', $id) }}">
        <i class="fas fa-user-edit img-zoom"></i>
    </button>

    <x-form action="{{ route('customers.destroy', $id) }}" method="delete" class="d-inline-block" crudify-form>
        <button type="submit" class="btn btn-link p-1" title="{{ __('Delete') }}"
            crudify-confirm="{{ __('Delete customer #') }} {{ __($id)}} {{ __($lastname)}}, {{ __($firstname)}}?">
            <i class="fas fa-user-times img-zoom"></i>
        </button>
    </x-form>
</div>