<div class="group">
    <label class="form-label" for="street">Strasse *</label>
    <input wire:model.lazy="street" class="form-control @error('street') is-invalid @enderror @if(session('valid-street')) 
        is-valid @endif" id="street" type="text" placeholder="Mustergasse"  autofocus autocomplete="off">
    @error('street')
        <div id="invalidstreetFeedback" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    @if(session()->has('valid-street'))
        <div class="valid-feedback">
            {{ session('valid-street') }}
        </div>
    @endif
</div>
