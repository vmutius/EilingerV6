<form wire:submit.prevent="saveCost">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ausbildungs- und Lebenskosten</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über die Kosten im bevorstehenden Ausbildungsjahr. Angaben bitte in der jeweiligen
                    Landewährung pro Jahr</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-sm-4">
            <label class="form-label" for="cost.semester_fees">{{ __('cost.semester_fees') }}</label>
            <input wire:model.lazy="cost.semester_fees" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.semester_fees'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.fees">{{ __('cost.fees') }}</label>
            <input wire:model.lazy="cost.fees" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.fees'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.educational_material">{{ __('cost.educational_material') }}</label>
            <input wire:model.lazy="cost.educational_material" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.educational_material'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.excursion">{{ __('cost.excursion') }}</label>
            <input wire:model.lazy="cost.excursion" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.excursion'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="cost.travel_expenses">{{ __('cost.travel_expenses') }}</label>
            <input wire:model.lazy="cost.travel_expenses" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.travel_expenses'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-4">
            <label class="form-label" for="number_of_children">{{ __('cost.number_of_children') }}</label>
            <input wire:model.lazy="cost.number_of_children" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.number_of_children'){{ $message }}@enderror</span>
        </div>

        <h4 class="mb-0">{{ __('cost.other_standard_of_living') }}</h4>
        <small>Bitte nur das Zutreffende ausfüllen</small>
        <div class="col-sm-6">
            <label class="form-label"
                   for="cost_of_living_with_parents">{{ __('cost.cost_of_living_with_parents') }}</label>
            <input wire:model.lazy="cost.cost_of_living_with_parents" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.cost_of_living_with_parents'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="cost_of_living_alone">{{ __('cost.cost_of_living_alone') }}</label>
            <input wire:model.lazy="cost.cost_of_living_alone" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.cost_of_living_alone'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label"
                   for="cost_of_living_single_parent">{{ __('cost.cost_of_living_single_parent') }}</label>
            <input wire:model.lazy="cost.cost_of_living_single_parent" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.cost_of_living_single_parent'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-6">
            <label class="form-label"
                   for="cost_of_living_with_partner">{{ __('cost.cost_of_living_with_partner') }}</label>
            <input wire:model.lazy="cost.cost_of_living_with_partner" type="number" class="form-control"/>
            <span class="text-danger">@error('cost.cost_of_living_with_partner'){{ $message }}@enderror</span>
        </div>
        <hr class="border border-dark opacity-50">
        <div class="col-sm-12 text-end">
            <p>Totale Kosten in {{ $this->myCurrency->abbreviation }} {{ $this->getAmountCost() }}</p>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
