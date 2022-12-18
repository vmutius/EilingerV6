<form wire:submit.prevent="Step1UserSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bewerber</h3>
        <small>Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-2">
            <label class="form-label" for="salutation">Anrede</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option value="" disabled>Bitte Anrede auswählen</option>
                @foreach (App\Models\User::SALUTATION as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="user.firstname" type="text" id="firstname" class="form-control" />
        </div>
        <div class="col-sm-5">       
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="user.lastname" type="text" id="lastname" class="form-control"/>
        </div>
    
        
        <div class="col-md-5">
            <label class="form-label" for="email">Email</label>
            <input wire:model.lazy="user.email" type="email" id="email" class="form-control" />
        </div>

        <div class="col-md-4">
            <label class="form-label" for="telefon">Telefon</label>
            <input wire:model.lazy="user.telefon" type="text" id="telefon" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">Mobile</label>
            <input wire:model.lazy="user.mobile" type="email" id="mobile" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="sozVersNr">Sozialversicherungsnummer</label>
            <input wire:model.lazy="user.sozVersNr" type="text" id="sozVersNr" class="form-control" />
        </div>

        <div class="form-group">
            <label class="form-label" for="number">Für Ausländer</label>
            <input id="checkbox" type=checkbox >
        </div>

        <div id="additional" style="display:none;">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="street">in der Schweiz seit</label>
                    <input wire:model.lazy="street" type="text" id="street" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="number">Art der Bewilligung</label>
                    <input type="text" id="number" class="form-control"/>
                </div>
            </div>
        </div>
        
        <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-colour-1 btn-prev" disabled>
            <i class="bx bx-chevron-left bx-sm ms-sm-n2 align-middle"></i>
            <span class="align-middle d-sm-inline-block d-none">Zurück</span>
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
