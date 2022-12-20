<form wire:submit.prevent="Step2AddressSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <small>Abweichende Adresse bei Wochenentaufhalt</small>
    </div>
    <div class="row g-3">
        
        <div class="col-md-6">
            <label class="form-label" for="street">Strasse</label>
            <input wire:model.lazy="address.street" type="text" id="street" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Hausnummer</label>
            <input wire:model.lazy="address.number" type="text" id="number" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="plz">PLZ</label>
            <input wire:model.lazy="address.plz" type="text" id="plz" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="town">Ort</label>
            <input wire:model.lazy="address.town" type="text" id="town" class="form-control"/>
        </div>
        
        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>