<form wire:submit.prevent="saveCost">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ausbildungs- und Lebenskosten</h3>
        <small>im bevorstehenden Ausbildungsjahr</small>
    </div>
    <div class="row g-3">

        <x-notification/>
        
        <div class="col-sm-6">
            <label class="form-label" for="semesterFees">Semestergebühren</label>
            <input wire:model.lazy="cost.semesterFees" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="fees">übrige Gebühren</label>
            <input wire:model.lazy="cost.fees" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="educationalMaterial">Schulmaterialien/Lehrmittel</label>
            <input wire:model.lazy="cost.educationalMaterial" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="excursion">Exkursionen/Schulverlegungen Sprachaufenthalte</label>
            <input wire:model.lazy="cost.excursion" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="travelExpenses">Reisespesen</label>
            <input wire:model.lazy="cost.travelExpenses" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="numberOfChildren">Anzahl Kinder im eigenen Haushalt</label>
            <input wire:model.lazy="cost.numberOfChildren" type="number" class="form-control" />
        </div>

        <h4 class="mb-0">Übrige Lebenshaltung</h4>
        <small>Bitte nur das Zutreffende ausfüllen</small>
        <div class="col-sm-6">
            <label class="form-label" for="costOfLivingWithParents">im Haushalt der Elternn</label>
            <input wire:model.lazy="cost.costOfLivingWithParents" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="costOfLivingAlone">im eigenen Haushalt (Begründung) </label>
            <input wire:model.lazy="cost.costOfLivingAlone" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="costOfLivingSingleParent">im eigenen Haushalt für Alleinerziehende</label>
            <input wire:model.lazy="cost.costOfLivingSingleParent" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="costOfLivingWithPartner">im eigenen Haushalt mit Partner</label>
            <input wire:model.lazy="cost.costOfLivingWithPartner" type="number" class="form-control" />
        </div>
        
    
        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>