@props(['additionalStyle' => '', 'type' => 'button'])

<button {{ $attributes->class(["btn btn-primary $additionalStyle"])->merge([
    'type' => $type,
]) }}>
    {{ $slot }}
</button>
