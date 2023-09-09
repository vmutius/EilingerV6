<div class="accordion-item">
    <h2 class="accordion-header" id="headingParents">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
            data-bs-target="#collapseParents">Eltern</button>
    </h2>
    <div id="collapseParents" class="accordion-collapse collapse">
        @forelse ($parents as $parent)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>Elternteil: {{ $parent->parent_type }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Nachname: {{ $parent->lastname }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Vorname: {{ $parent->firstname }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Geburtstag: {{ $parent->birthday }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Telefon: {{ $parent->phone }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Anschrift: {{ $parent->address }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>PLZ und Ort: {{ $parent->plz_ort }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Wohnhaft seit: {{ $parent->since }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Beruf: {{ $parent->job }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Arbeitgeber: {{ $parent->employer }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>Arbeitsverhältnis: {{ $parent->job_type }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Eltern eingetragen</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>