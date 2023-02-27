<form wire:submit.prevent="saveAccount">
    <div class="content-header mb-3">
        <h3 class="mb-0">Auszahlung</h3>
        <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-6">
            <label class="form-label" for="name_bank">Name der Bank</label>
            <input wire:model.lazy="account.name_bank" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="city_bank">Ort der Bank</label>
            <input wire:model.lazy="account.city_bank" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="owner">Kontoinhaber</label>
            <input wire:model.lazy="account.owner" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="IBAN">IBAN</label>
            <input wire:model.lazy="account.IBAN" type="text" class="form-control" />
        </div>

        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
