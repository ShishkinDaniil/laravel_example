<x-input id="{{ $name }}" type="hidden" {{ $attributes }}></x-input>
<trix-editor input="{{ $name }}"></trix-editor>
@once
    @push('trix')
        @vite(['resources/css/trix.css'])
        @vite(['resources/js/trix.js'])
    @endpush
@endonce
