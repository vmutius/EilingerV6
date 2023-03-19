<form wire:submit.prevent="saveAbweichendeAddress">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <small>Abweichende Adresse bei Wochenentaufhalt</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="street">Strasse</label>
            <input wire:model.lazy="abweichendeAddress.street" type="text" class="form-control" />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Hausnummer</label>
            <input wire:model.lazy="abweichendeAddress.number" type="text" class="form-control" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="plz">PLZ</label>
            <input wire:model.lazy="abweichendeAddress.plz" type="text" class="form-control" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="town">Ort</label>
            <input wire:model.lazy="abweichendeAddress.town" type="text" class="form-control" />
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="country">Land</label>
            <select wire:model.lazy="abweichendeAddress.country_id" class="form-select">
                <option disabled>Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
