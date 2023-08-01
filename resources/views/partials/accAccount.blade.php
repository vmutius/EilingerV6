<div class="accordion-item">
    <h2 class="accordion-header" id="headingAccount">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
            data-bs-target="#collapseAccount">Auszahlung</button>
    </h2>
    <div id="collapseAccount" class="accordion-collapse collapse">
        @if ($account)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>Name der Bank: {{ $account->name_bank }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Ort der Bank: {{ $account->city_bank }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Kontoinhaber: {{ $account->owner }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>IBAN: {{ $account->IBAN }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Kontodaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>