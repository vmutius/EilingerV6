<form wire:submit.prevent="Step1UserSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bewerber</h3>
        <small>Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="firstname" type="text" id="firstname" class="form-control" />
        </div>
        <div class="col-sm-6">       
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="lastname" type="text" id="lastname" class="form-control"/>
        </div>
    
        <div class="col-sm-6">
            <label for="birthday" class="form-label">Geburtstag</label>
            <input wire:model.lazy="birthday" class="form-control" id="flatpickr-human-friendly" type="text" placeholder="Bitte Datum wählen ..." />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="email">Email</label>
            <input wire:model.lazy="email" type="email" id="email" class="form-control" />
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
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>

        <button type="submit"  class="btn btn-colour-1">
            <span class="align-middle d-sm-inline-block d-none">Save</span>
        </button>

        <button class="btn btn-colour-1  btn-next">
            <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Next</span>
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
