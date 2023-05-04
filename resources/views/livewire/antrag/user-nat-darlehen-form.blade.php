<form wire:submit.prevent="saveUserNat">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gesuchssteller</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über den Gesuchssteller</small>
            </div>
        </div>
    </div>

    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-2">
            <label class="form-label" for="salutation">Anrede *</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option selected value="" disabled>Bitte Anrede auswählen</option>
                @foreach (App\Enums\Salutation::cases() as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
            @error('user.salutatiom')
                <div style="font-size: 11px; color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="firstname">Vorname *</label>
            <input wire:model.lazy="user.firstname" type="text" class="form-control" />
            <span class="text-danger">@error('user.firstname'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="lastname">Nachname *</label>
            <input wire:model.lazy="user.lastname" type="text" class="form-control" />
            <span class="text-danger">@error('user.lastname'){{ $message }}@enderror</span>
        </div>

        
        <div class="col-sm-2">
            <label for="birthday" class="form-label">Geburtsdatum *</label>
            <input wire:model="user.birthday" type="date" class="form-control">
            <span class="text-danger">@error('user.birthday'){{ $message }}@enderror</span>
        </div>
        

        <div class="col-md-5">
            <label class="form-label" for="telefon">Telefon</label>
            <input wire:model.lazy="user.telefon" type="text" class="form-control" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="mobile">Mobile</label>
            <input wire:model.lazy="user.mobile" type="text" class="form-control" />
        </div>

        <div class="col-md-12">
            <label class="form-label" for="contact_partner_aboard">Ansprechpartner im Ausland</label>
            <input wire:model.lazy="user.contact_partner_aboard" type="text" class="form-control" />
        </div>
        
        
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>

        </div>
    </div>
</form>
