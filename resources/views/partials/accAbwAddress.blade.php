<div class="accordion-item">
    <h2 class="accordion-header" id="headingAbwAddress">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseAbwAddress">Abweichende Adresse
        </button>
    </h2>
    <div id="collapseAbwAddress" class="accordion-collapse collapse">
        @if ($abweichendeAddress)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('address.street') }}: {{ $abweichendeAddress->street }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.number') }}: {{ $abweichendeAddress->number }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.plz') }}: {{ $abweichendeAddress->plz }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.town') }}: {{ $abweichendeAddress->town }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('address.country') }}: {{ $abweichendeAddress->country->name }}</p>
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
