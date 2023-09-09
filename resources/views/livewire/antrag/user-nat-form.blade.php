<form wire:submit.prevent="saveUserNat">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bewerber</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht</small>
            </div>
        </div>
    </div>

    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-2">
            <label for="salutation" id="salutation" class="form-label">Anrede *</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option selected value="" disabled>Bitte Anrede auswählen</option>
                @foreach (App\Enums\Salutation::cases() as $salutation)
                    <option value="{{ $salutation }}">{{ $salutation }}</option>
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
            <label class="form-label" for="country">Nationalität *</label>
            <select wire:model.lazy="user.nationality" class="form-select">
                <option selected value="">Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->short_code }}">{{ $country->name }}</option>
                @endforeach
            </select>
            @error('user.nationality')
                <div style="font-size: 11px; color: red">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="col-sm-5">
            <label for="birthday" class="form-label">Geburtsdatum *</label>
            <input wire:model="user.birthday" type="date" class="form-control">
            <span class="text-danger">@error('user.birthday'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-5">
            <label class="form-label" for="civil_status">Zivilstand *</label>
            <select wire:model.lazy="user.civil_status" class="form-select">
                <option selected value="">-- Wählen Sie eine Option --</option>
                @foreach (\App\Enums\CivilStatus::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->value }}</option>
                @endforeach
            </select>
            @error('user.civil_status')
                <div style="font-size: 11px; color: red">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label" for="phone">Telefon</label>
            <input wire:model.lazy="user.phone" type="text" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">Mobile</label>
            <input wire:model.lazy="user.mobile" type="text" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="soz_vers_nr">Sozialversicherungsnummer</label>
            <input wire:model.lazy="user.soz_vers_nr" type="text" class="form-control" />
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="in_ch_since">In der Schweiz seit (für Ausländer)</label>
            <input wire:model="user.in_ch_since" type="date" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="granting">Art der Bewilligung (für Ausländer)</label>
            <select wire:model.lazy="user.granting" class="form-select">
                <option selected value="">-- Wählen Sie eine Option --</option>
                @foreach (App\Enums\Bewilligung::cases() as $granting)
                    <option value="{{ $granting->value }}">{{ $granting->value }}</option>
                @endforeach
            </select>
            @error('user.granting')
                <div style="font-size: 11px; color: red">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>

        </div>
    </div>
</form>
