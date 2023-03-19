<form wire:submit.prevent="saveAddress">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <small>Angaben über Wohnsitz</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="street">Strasse</label>
            <input wire:model.lazy="address.street" type="text" class="form-control" />
            <span class="text-danger">@error('address.street'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Hausnummer</label>
            <input wire:model.lazy="address.number" type="text" class="form-control" />
            <span class="text-danger">@error('address.number'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-5">
            <label class="form-label" for="plz">PLZ</label>
            <input wire:model.lazy="address.plz" type="text" class="form-control" />
            <span class="text-danger">@error('address.plz'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-5">
            <label class="form-label" for="town">Ort</label>
            <input wire:model.lazy="address.town" type="text" class="form-control" />
            <span class="text-danger">@error('address.town'){{ $message }}@enderror</span>
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="country">Land</label>
            <select wire:model.lazy="address.country_id" class="form-select">
                <option disabled>Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('address.country'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
