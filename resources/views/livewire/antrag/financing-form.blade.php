<form wire:submit.prevent="saveFinancing">
    <div class="content-header mb-3">
        <h3 class="mb-0">Finanzierung</h3>
        <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="personalContribution">Eigenleistung vom Bewerber selbst</label>
            <input wire:model.lazy="financing.personalContribution" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="nettoIncome">Einkommen netto des Ehe- / Lebenspartners minus Freibetrag</label>
            <input wire:model.lazy="financing.nettoIncome" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="assets">eigenes Vermögen (Vermögen bei erster Gesuchstellung) </label>
            <input wire:model.lazy="financing.assets" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="scholarship">zumutbare Elternleistung gem. Berechnung </label>
            <input wire:model.lazy="financing.scholarship" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="otherIncome">Anderweitige Einkünfte (Betrag)</label>
            <input wire:model.lazy="financing.otherIncome" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="incomeWhere">Auszahlende Stelle der anderweitige Einkünfte </label>
            <input wire:model.lazy="financing.incomeWhere" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="incomeWh">Begünstigter der anderweitige Einkünfte (Betrag)</label>
            <input wire:model.lazy="financing.incomeWho" type="number" class="form-control" />
        </div>
      

       <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
