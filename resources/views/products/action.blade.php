<div class="text-md-right text-nowrap">
    <button type="button" class="btn btn-link p-1 buttondesign" title="{{ __('Show') }}"
        crudify-show-modal="{{ route('products.show', $id) }}">
        <i class="fas fa-shopping-cart"></i>
    </button>

    <button type="button" class="btn btn-link p-1 buttondesign" title="{{ __('Edit') }}"
        crudify-show-modal="{{ route('products.edit', $id) }}">
        <i class="fas fa-pen-square"></i>
    </button>

    <x-form action="{{ route('products.destroy', $id) }}" method="delete" class="d-inline-block" crudify-form>
        <button type="submit" class="btn btn-link p-1 buttondesign" title="{{ __('Delete') }}"
            crudify-confirm="{{ __('Delete product #') }} {{ __($id)}} {{ __($item)}}, {{ __($brand)}}?">
            <i class="fas fa-ban"></i>
        </button>
    </x-form>
</div>