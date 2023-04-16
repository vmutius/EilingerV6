<form wire:submit.prevent="saveCost">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ausbildungs- und Lebenskosten</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über die Kosten im bevorstehenden Ausbildungsjahr</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification />

        <div class="col-sm-2">
            <label class="form-label" for="currency">Währung *</label>
            <select wire:model.lazy="cost.currency" class="form-select">
                <option selected value="">Bitte auswählen...</option>
                @foreach ($currencies as $currency)
                    <option value="{{ $currency->abbreviation }}">{{ $currency->currency }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('cost.currency'){{ $message }}@enderror</span>
        </div>

        <div class="col-sm-5">
            <label class="form-label" for="cost.semester_fees">Semestergebühren</label>
            <input wire:model.lazy="cost.semester_fees" type="number" class="form-control" />
            <span class="text-danger">@error('cost.semester_fees'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="cost.fees">Übrige Gebühren</label>
            <input wire:model.lazy="cost.fees" type="number" class="form-control" />
            <span class="text-danger">@error('cost.fees'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.educational_material">Schulmaterialien/Lehrmittel</label>
            <input wire:model.lazy="cost.educational_material" type="number" class="form-control" />
            <span class="text-danger">@error('cost.educational_material'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.excursion">Exkursionen/Schulverlegungen/Sprachaufenthalte</label>
            <input wire:model.lazy="cost.excursion" type="number" class="form-control" />
            <span class="text-danger">@error('cost.excursion'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.travel_expenses">Reisespesen</label>
            <input wire:model.lazy="cost.travel_expenses" type="number" class="form-control" />
            <span class="text-danger">@error('cost.travel_expenses'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="number_of_children">Anzahl unterhaltsberechtigte Kinder</label>
            <input wire:model.lazy="cost.number_of_children" type="number" class="form-control" />
            <span class="text-danger">@error('cost.number_of_children'){{ $message }}@enderror</span>
        </div>

        <h4 class="mb-0">Übrige Lebenshaltung</h4>
        <small>Bitte nur das Zutreffende ausfüllen</small>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_with_parents">im Haushalt der Eltern</label>
            <input wire:model.lazy="cost.cost_of_living_with_parents" type="number" class="form-control" />
            <span class="text-danger">@error('cost.cost_of_living_with_parents'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_alone">im eigenen Haushalt (Begründung) </label>
            <input wire:model.lazy="cost.cost_of_living_alone" type="number" class="form-control" />
            <span class="text-danger">@error('cost.cost_of_living_alone'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_single_parent">im eigenen Haushalt Alleinerziehend</label>
            <input wire:model.lazy="cost.cost_of_living_single_parent" type="number" class="form-control" />
            <span class="text-danger">@error('cost.cost_of_living_single_parent'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_with_partner">im eigenen Haushalt mit Partner</label>
            <input wire:model.lazy="cost.cost_of_living_with_partner" type="number" class="form-control" />
            <span class="text-danger">@error('cost.cost_of_living_with_partner'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
