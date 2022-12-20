<form wire:submit.prevent="Step4AccountSubmit">
    <div class="content-header mb-3">
        <h6 class="mb-0">Auszahlung</h6>
        <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="name_bank">Name der Bank</label>
            <input type="text" id="name_bank" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="city_bank">Ort der Bank</label>
            <input type="text" id="city_bank" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="owner">Kontoinhaber</label>
            <input type="text" id="owner" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="IBAN">IBAN</label>
            <input type="text" id="IBAN" class="form-control" />
        </div>

        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
