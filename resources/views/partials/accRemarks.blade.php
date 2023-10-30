<div class="accordion-item">
    <h2 class="accordion-header" id="headingRemarks">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseRemarks">Bemerkungen und Beilagen
        </button>
    </h2>
    <div id="collapseRemarks" class="accordion-collapse collapse">
        @if ($education)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>Ausbildung: {{ $education->education }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Name: {{ $education->name }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Beabsichtigter Abschluss als: {{ $education->final }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Abschluss: {{ $education->grade }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>ECTS-Punkte für das kommende Semester: {{ $education->ects_points }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Auszahlungsdaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
