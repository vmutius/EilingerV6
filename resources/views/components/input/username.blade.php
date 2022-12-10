<div class="group">
    <label class="form-label" for="username">Benutzername *</label>
    <input wire:model.lazy="username" class="form-control @error('username') is-invalid @enderror @if(session('valid-username')) is-valid @endif" id="username" type="text"
        placeholder="Wählen Sie einen Benutzernamen" autofocus autocomplete="off">
    @error('username')
        <div id="invalidFeedback" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    @if(session()->has('valid-username'))
        <div class="valid-feedback">
            {{ session('valid-username') }}
        </div>
    @endif
</div>