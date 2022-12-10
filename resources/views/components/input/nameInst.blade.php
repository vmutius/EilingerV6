<div class="group">
    <label class="form-label" for="nameInst">Name Verein/Organisation *</label>
    <input wire:model.lazy="nameInst" class="form-control @error('nameInst') is-invalid @enderror @if(session('valid-nameInst')) is-valid @endif" id="name_inst" type="text"
        placeholder="Firma Mustermann"  autofocus autocomplete="off">
    @error('nameInst')
        <div id="invalidnameInstFeedback" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    @if(session()->has('valid-nameInst'))
        <div class="valid-feedback">
            {{ session('valid-nameInst') }}
        </div>
    @endif
</div>