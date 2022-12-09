@props([
    'label ',
    'input_var',
    'placeholder' => false,
    'required' => false,
])

<div class="group">
    <label for="">{{ $label }}</label>
    <input wire:model='{{ $input_var }}' 
        type="text" class="form-control" 
        name="{{ $input_var }}" id="{{ $input_var }}" 
        @if($placeholder)
            placeholder="{{ $placeholder }}"
        @endif
        @if ($required)
            required
        @endif
        >
    @error('{{ $input_var }}') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
</div>