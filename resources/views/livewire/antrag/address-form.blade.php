<form wire:submit.prevent="save">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <small>Angaben über Wohnsitz</small>
    </div>
    <div class="row g-3">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="col-md-6">
            <label class="form-label" for="street">Strasse</label>
            <input wire:model.lazy="address.street" type="text" class="form-control" />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Hausnummer</label>
            <input wire:model.lazy="address.number" type="text" class="form-control" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="plz">PLZ</label>
            <input wire:model.lazy="address.plz" type="text" class="form-control" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="town">Ort</label>
            <input wire:model.lazy="address.town" type="text" class="form-control" />
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="country">Land</label>
            <select wire:model.lazy="address.country" class="form-select">
                <option disabled>Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->short_code }}">{{ $country->name }}</option>
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
