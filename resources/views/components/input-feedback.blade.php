<div>
    @if (session()->has('valid-{{ $slot }}'))
        <div class="valid-feedback">
            {{ session('valid-{{ $slot }}') }}
        </div>
    @endif
</div>