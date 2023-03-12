<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger']) }}>
    <span class="align-middle d-sm-inline-block d-none">{{ $slot }}</span>
</button>
