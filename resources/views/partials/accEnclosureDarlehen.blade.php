<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosureDarlehen">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosureDarlehen">Bemerkungen und Beilagen (Darlehen)
        </button>
    </h2>
    <div id="collapseEnclosureDarehen" class="accordion-collapse collapse">
        @if ($education)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>Ausbildung: {{ $education->education }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Name: {{ $education->name }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Beabsichtigter Abschluss als: {{ $education->final }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Abschluss: {{ $education->grade }}</p>
                    </div>
                    <div class="col-sm-4">
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
