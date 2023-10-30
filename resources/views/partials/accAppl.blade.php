<div class="accordion-item">
    <h2 class="accordion-header" id="headingAppl">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseAppl">Antrag
        </button>
    </h2>
    <div id="collapseAppl" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-3">
                    <p>Name des Antrags: {{ $application->name }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Bereich: {{ $application->bereich }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Form: {{ $application->form }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Länderwährung: {{ $application->currency->abbreviation }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Errechneter Betrag: {{ $application->calc_amount }}</p>
                </div>
                <div class="col-sm-3">
                    <p>Gewünschter Betrag: {{ $application->req_amount }}</p>
                </div>
                @if ($application->form->value == 'Darlehen')
                    <div class="col-sm-3">
                        <p>Auszahlungsform: {{ $application->payout_plan }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
