<form wire:submit.prevent="Step2AddressSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Anschrift</h3>
        <small>Angaben über Wohnsitz</small>
    </div>
    <div class="row g-3">
        
        <div class="col-md-6">
            <label class="form-label" for="street">Strasse</label>
            <input wire:model.lazy="address.street" type="text" id="street" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Hausnummer</label>
            <input type="text" id="number" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="email">PLZ</label>
            <input type="text" id="email" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="number">Ort</label>
            <input type="text" id="number" class="form-control"/>
        </div>

        <div class="form-group">
            <label class="form-label" for="number">Abweichende Adresse bei Wochenentaufhalt</label>
            <input id="checkbox" type=checkbox >
        </div>

        <div id="additional" style="display:none;">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="street">Strasse</label>
                    <input type="text" id="street" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="number">Hausnummer</label>
                    <input type="text" id="number" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="email">PLZ</label>
                    <input type="text" id="email" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="number">Ort</label>
                    <input type="text" id="number" class="form-control"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="number">Für Ausländer</label>
            <input id="checkbox" type=checkbox >
        </div>
        
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-colour-1 btn-prev" wire:click="decreaseStep()">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2 align-middle"></i>
                <span class="align-middle d-sm-inline-block d-none">Zurück</span>
            </button>
    
            <button type="submit"  class="btn btn-colour-1">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
    
            <button class="btn btn-colour-1  btn-next " wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        </div>
    </div>
</form>
<script>
    var checkbox = document.getElementById('checkbox');
    var additional_div = document.getElementById('additional');
    checkbox.onclick = function() {
        console.log(this);
        if(this.checked) {
            additional_div.style['display'] = 'block';
        } else {
            additional_div.style['display'] = 'none';
        }
    };
</script>
