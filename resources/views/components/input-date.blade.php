<div
    x-data="{ value: @entangle($attributes->wire('model')), picker: undefined }"
    x-init="new Pikaday({ field: $refs.input, format: 'DD.MM.YYYY', onOpen() { this.setDate($refs.input.value) } })"
    x-on:change="value = $event.target.value"
>

    <input
        {{ $attributes->whereDoesntStartWith('wire:model') }}
        x-ref="input"
        x-bind:value="value"
        class="form-control"
    />
</div>