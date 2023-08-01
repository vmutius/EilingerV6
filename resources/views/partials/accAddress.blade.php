<div class="accordion-item">
    <h2 class="accordion-header" id="headingAddress">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
            data-bs-target="#collapseAddress">Adresse</button>
    </h2>
    <div id="collapseAddress" class="accordion-collapse collapse">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-3">
                    <p>Strasse: {{ $address->street }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Hausnummer: {{ $address->number }}</p>
                </div>
                <div class="col-sm-3">
                    <p>PLZ: {{ $address->plz }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Stadt: {{ $address->town }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Land: {{ $address->_id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>