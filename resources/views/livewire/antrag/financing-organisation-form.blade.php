<form wire:submit.prevent="saveFinancingOrganisation">
    <div class="content-header mb-3">
        <h3 class="mb-0">Einnahmen</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Auflistung aller Einnahmen. Angaben bitte in der jeweiligen Landewährung pro Jahr</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>
        @foreach ($financings as $index => $financing)
            <div class="row g-3">
                <div class="col-sm-5">
                    <label class="form-label" for="financing_name">Einnahme</label>
                    <input wire:model.lazy="financings.{{ $index }}.financing_name" type="text" class="form-control"/>
                    <span
                        class="text-danger">@error('$financings.'. $index .'.financing_name'){{ $message }}@enderror</span>
                </div>
                <div class="col-sm-5">
                    <label class="form-label" for="financing_amount">Betrag</label>
                    <input wire:model.lazy="financings.{{ $index }}.financing_amount" type="number"
                           class="form-control"/>
                    <span
                        class="text-danger">@error('$financings.'. $index .'.financing_amount'){{ $message }}@enderror</span>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-danger btn-xs mt-4"
                            wire:click.prevent="delFinancingOrganisation({{ $index }})">
                        <span class='badge badge-success small'><i class="bi bi-trash3"></i></span>
                    </button>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-secondary mt-4" wire:click.prevent="addFinancingOrganisation()">
                    + Weitere Einnahmen hinzufügen
                </button>
            </div>
        </div>

        <hr class="border border-dark opacity-50">
        <div class="col-sm-12 text-end">
            <p>Totale Kosten in {{ $this->myCurrency->abbreviation }} {{ $this->getAmountFinancingOrganisation()}}</p>
        </div>


        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

