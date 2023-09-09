<form wire:submit.prevent="saveAddress">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über den Wohnsitz</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="address.street">{{  __('address.street')  }} *</label>
            <input wire:model.lazy="address.street" type="text" class="form-control" id="address.street"/>
            <span class="text-danger">@error('address.street'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="address.number">{{  __('address.number')  }}</label>
            <input wire:model.lazy="address.number" type="text" class="form-control" id="address.number"/>
            <span class="text-danger">@error('address.number'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-5">
            <label class="form-label" for="address.plz">{{  __('address.plz')  }} *</label>
            <input wire:model.lazy="address.plz" type="text" class="form-control" id="address.plz"/>
            <span class="text-danger">@error('address.plz'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-5">
            <label class="form-label" for="address.town">{{  __('address.town')  }} *</label>
            <input wire:model.lazy="address.town" type="text" class="form-control" id="address.town"/>
            <span class="text-danger">@error('address.town'){{ $message }}@enderror</span>
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="address.country">{{  __('attributes.country')  }} *</label>
            <select wire:model.lazy="address.country_id" class="form-select" id="address.country">
                <option selected value="">Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('address.country_id'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
