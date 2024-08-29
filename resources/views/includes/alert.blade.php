@if ($alert = session()->pull('alert'))
    <div class="alert-container">
        <div class="alert  alert-success mb-0 rounded-0 text-center small py-2" aria-hidden="true">
            {{ $alert }}
            <x-input type="hidden"> &times;</x-input>
        </div>
    </div>

    @once
        @push('scripts')
            <script>
                $('#flash-overlay-modal').modal();
            </script>
            <script>
                $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            </script>
        @endpush
    @endonce
@endif
