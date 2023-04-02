@props(['name'])

<label class="form-label" for="{{ $name }}">{{ $slot }}</label>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">CHF</span>
    </div>
    <input wire:model.lazy="{{ $name }}" type="number" class="form-control" />

</div>
