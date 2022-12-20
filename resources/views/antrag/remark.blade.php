<form wire:submit.prevent="Step9RemarkSubmit">
    <div class="content-header mb-3">
        <h6 class="mb-0">Bemerkungen</h6>
        <small>(z.B. Begründung, weshalb Kosten für Unterkunft und Verpflegung auswärts anzurechnen sind)</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-12">
            <label class="form-label" for="remark">Bemerkung</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
