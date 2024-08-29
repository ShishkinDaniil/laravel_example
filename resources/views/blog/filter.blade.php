<x-form action="{{ route('blog') }}">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" placeholder="{{ __('Поиск') }}" value="{{ request('search') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-select name="categoryId" value="{{ request('categoryId') }}" :options="[null => __('Все категории'), 1 => __('Первая категория'), 2 => __('Вторая категория')]" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button additionalStyle="w-100" type='submit'>
                    {{ __('Применить') }}
                </x-button>
            </div>
        </div>
    </div>
</x-form>
