<div class="accordion-item">
    <h2 class="accordion-header" id="headingFinancing">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseFinancing">Finanzierung
        </button>
    </h2>
    <div id="collapseFinancing" class="accordion-collapse collapse">
        @if ($financing)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('financing.personal_contribution') }}: {{ $financing->personal_contribution }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.netto_income') }}: {{ $financing->netto_income }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.assets') }}: {{ $financing->assets }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.scholarship') }}: {{ $financing->scholarship }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.other_income') }}: {{ $financing->other_income }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.income_where') }}: {{ $financing->income_where }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('financing.incomeWho') }}: {{ $financing->incomeWho }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Finanzierungsdaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
