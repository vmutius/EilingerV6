<section class="home-section">
    <div class="text">Antrag {{ $application->name }} (Bereich: {{ $application->bereich }})</div>

    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="accordion" id="myAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingUser">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseUser">Bewerber</button>
                    </h2>
                    <div id="collapseUser" class="accordion-collapse collapse show">
                        <div class="card-body">
                            <div class=row>
                                <div class="col-sm-3">
                                    <p>Nachname: {{ $user->lastname }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Vorname: {{ $user->firstname }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Nationalität: {{ $user->nationality }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Geburtstag: {{ $user->birthday }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Email: {{ $user->email }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Telefon: {{ $user->telefon }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Mobil: {{ $user->mobile }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>soz_vers_nr: {{ $user->soz_vers_nr }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>In der Schweiz seit: {{ $user->in_ch_since }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Bewilligung: {{ $user->bewilligung }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEducation">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseEducation">Ausbildung</button>
                    </h2>
                    <div id="collapseEducation" class="accordion-collapse collapse">
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
                                        <p>Keine Ausbildungsdaten eingetragen</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
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
                                        <p>Telefon: {{ $parent->telefon }}</p>
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSibling">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseSibling">Geschwister</button>
                    </h2>
                    <div id="collapseSibling" class="accordion-collapse collapse">
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
                                        <p>Keine Ausbildungsdaten eingetragen</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCost">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseCost">Kosten</button>
                    </h2>
                    <div id="collapseCost" class="accordion-collapse collapse">
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
                                        <p>Keine Ausbildungsdaten eingetragen</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFinancing">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseFinancing">Finanzierung</button>
                    </h2>
                    <div id="collapseFinancing" class="accordion-collapse collapse">
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
                                        <p>Keine Ausbildungsdaten eingetragen</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingRemarks">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseRemarks">Bemerkungen und Beilagen</button>
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
            </div>
        </div>

        <div class="shadow p-3 mb-5 bg-body rounded">
            Statusübergang
        </div>
        @livewire('messages-section', ['application' => $application]);
    </div>

    </div>
</section>
