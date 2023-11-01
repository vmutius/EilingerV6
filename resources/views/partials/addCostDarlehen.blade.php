<div class="accordion-item">
    <h2 class="accordion-header" id="headingCostDarlehen">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseCostDarlehen">Kosten Darlehen
        </button>
    </h2>
    <div id="collapseCostDarlehen" class="accordion-collapse collapse">
        @if ($costDarlehen)
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
                        <p>Keine Darlehenskosten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
