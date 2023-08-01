<form wire:submit.prevent="saveFinancing">
    <div class="content-header mb-3">
        <h3 class="mb-0">Finanzierung</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über die Einnahmen pro Jahr</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-4">
            <label class="form-label" for="personal_contribution">Eigenleistung vom Bewerber selbst</label>
            <input wire:model.lazy="financing.personal_contribution" type="number" class="form-control" />
            <span class="text-danger">@error('financing.personal_contribution'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="netto_income">Einkommen netto des Ehe- / Lebenspartners minus Freibetrag</label>
            <input wire:model.lazy="financing.netto_income" type="number" class="form-control" />
            <span class="text-danger">@error('financing.netto_income'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="assets">eigenes Vermögen (Vermögen bei erster Gesuchstellung) </label>
            <input wire:model.lazy="financing.assets" type="number" class="form-control" />
            <span class="text-danger">@error('financing.assets'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="scholarship">zumutbare Elternleistung gem. Berechnung </label>
            <input wire:model.lazy="financing.scholarship" type="number" class="form-control" />
            <span class="text-danger">@error('financing.scholarship'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="other_income">Anderweitige Einkünfte (Betrag)</label>
            <input wire:model.lazy="financing.other_income" type="number" class="form-control" />
            <span class="text-danger">@error('financing.other_income'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="income_where">Auszahlende Stelle der anderweitige Einkünfte </label>
            <input wire:model.lazy="financing.income_where" type="text" class="form-control" />
            <span class="text-danger">@error('financing.income_where'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="incomeWho">Begünstigter der anderweitige Einkünfte</label>
            <input wire:model.lazy="financing.income_who" type="text" class="form-control" />
            <span class="text-danger">@error('financing.income_who'){{ $message }}@enderror</span>
        </div>

        <hr class="border border-dark opacity-50">
        <div class="col-sm-6">
            <p>Totale Kosten in {{ $this->myCurrency->abbreviation }} {{ $this->getAmountFinancing() }}</p>
        </div>
        <div class="col-sm-6">
            <p>Totale Kosten in CHF {{ $this->convertFinancingToCHF() }}</p>
        </div>
        


       <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
