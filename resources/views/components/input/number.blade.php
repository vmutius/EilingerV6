<div class="group">
    <label class="form-label" for="number">Hausnummer </label>
    <input wire:model.lazy="number" class="form-control @error('number') is-invalid @enderror @if(session('valid-number')) 
        is-valid @endif" id="number" type="text" placeholder="12"  autofocus autocomplete="off">
    @error('number')
        <div id="invalidstreetFeedback" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    @if(session()->has('valid-number'))
        <div class="valid-feedback">
            {{ session(['valid-number' => 'OK']) }}
        </div>
    @endif
</div>