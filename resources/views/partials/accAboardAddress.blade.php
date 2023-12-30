<div class="accordion-item">
    <h2 class="accordion-header" id="headingAbwAddress">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseAbwAddress">Addresse im Ausland
        </button>
    </h2>
    <div id="collapseAbwAddress" class="accordion-collapse collapse">
        @if ($aboardAddress)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('address.street') }}: {{ $aboardAddress->street }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.number') }}: {{ $aboardAddress->number }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.plz') }}: {{ $aboardAddress->plz }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.town') }}: {{ $aboardAddress->town }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.country') }}: {{ $aboardAddress->country->name }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('address.noAddress') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
