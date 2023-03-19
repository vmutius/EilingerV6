<form wire:submit.prevent="saveCost">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ausbildungs- und Lebenskosten</h3>
        
        <div class="d-flex justify-content-between">
            <div>
                <small>im bevorstehenden Ausbildungsjahr</small>
            </div>
            <div>
                @livewire('toogle-draft', ['model' => $cost])
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-6">
            <label class="form-label" for="semester_fees">Semestergebühren</label>
            <input wire:model.lazy="cost.semester_fees" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="fees">übrige Gebühren</label>
            <input wire:model.lazy="cost.fees" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="educational_material">Schulmaterialien/Lehrmittel</label>
            <input wire:model.lazy="cost.educational_material" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="excursion">Exkursionen/Schulverlegungen Sprachaufenthalte</label>
            <input wire:model.lazy="cost.excursion" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="travel_expenses">Reisespesen</label>
            <input wire:model.lazy="cost.travel_expenses" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="number_of_children">Anzahl Kinder im eigenen Haushalt</label>
            <input wire:model.lazy="cost.number_of_children" type="number" class="form-control" />
        </div>

        <h4 class="mb-0">Übrige Lebenshaltung</h4>
        <small>Bitte nur das Zutreffende ausfüllen</small>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_with_parents">im Haushalt der Elternn</label>
            <input wire:model.lazy="cost.cost_of_living_with_parents" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_alone">im eigenen Haushalt (Begründung) </label>
            <input wire:model.lazy="cost.cost_of_living_alone" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_single_parent">im eigenen Haushalt für Alleinerziehende</label>
            <input wire:model.lazy="cost.cost_of_living_single_parent" type="number" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_with_partner">im eigenen Haushalt mit Partner</label>
            <input wire:model.lazy="cost.cost_of_living_with_partner" type="number" class="form-control" />
        </div>


        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>