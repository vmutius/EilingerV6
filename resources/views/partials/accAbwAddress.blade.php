<div class="accordion-item">
    <h2 class="accordion-header" id="headingAbwAddress">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
            data-bs-target="#collapseAbwAddress">Abweichende Adresse</button>
    </h2>
    <div id="collapseAbwAddress" class="accordion-collapse collapse">
        @if ($abweichendeAddress)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>Strasse: {{ $abweichendeAddress->street }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Hausnummer: {{ $abweichendeAddress->number }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>PLZ: {{ $abweichendeAddress->plz }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Stadt: {{ $abweichendeAddress->town }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Land: {{ $abweichendeAddress->country }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>Keine abweichende Adresse eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>