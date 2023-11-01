<div class="accordion-item">
    <h2 class="accordion-header" id="headingSibling">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseSibling">Geschwister
        </button>
    </h2>
    <div id="collapseSibling" class="accordion-collapse collapse">
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
                        <p>Keine Ausbildungsdaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
