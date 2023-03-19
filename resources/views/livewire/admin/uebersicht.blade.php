<section class="home-section">
    <div class="text">Admin Portal der Eilinger Stiftung</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <section class="bg-light pt-5 pb-5 shadow-sm">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-12">
                            <h3 class="text-uppercase border-bottom mb-4">Übersicht</h3>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Benutzerübersicht</h5>
                                <div class="card-body">
                                    <p class="card-text">Liste aller User inklusive der eingesendeten Anträge</p>
                                    <p> Aktuell {{ $userCount }} Benutzer (ohne Admin)</p>
                                    <a href="{{ route('admin_users') }}" class="card-link">Benutzerübersicht</a>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Antragsübersicht</h5>
                                <div class="card-body">
                                    <p class="card-text">Anträge für die nächste Stiftungsratssitzung</p>
                                    <p>Aktuell {{ $applicationCount }} Anträge</p>
                                    <a href="{{ route('admin_applications') }}" class="card-link">Antragsübersicht</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Projektübersicht</h5>
                                <div class="card-body">
                                    <p class="card-text">Alle laufenden Projekte</p>
                                    <p>Aktuell {{ $projectCount }} laufende Projekte</p>
                                    <a href="{{ route('admin_projects') }}" class="card-link">Projektübersicht</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Einstellungen</h5>
                                <div class="card-body">
                                    <p class="card-text">Dateien für Anträge oder laufende Projekte können Sie hier
                                        anhängen
                                    </p>
                                    <a href="{{ route('admin_settings') }}" class="card-link">Einstellungen</a>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Profil</h5>
                                <div class="card-body">
                                    <p class="card-text">Ihr Benutzerprofile können Sie unten dem unten angehängten Link
                                        bearbeiten.
                                        Ihre Email Adresse und Ihr Password können Sie ebenfalls hier anpassen. Bei
                                        Änderung der Email Adresse
                                        müssen Sie diese erneut verifizieren.
                                    </p>
                                    <a href="{{ route('admin_profile.edit') }}" class="card-link">Benutzerprofil</a>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <h5 class="card-header">Logout</h5>
                                <div class="card-body">
                                    <p class="card-text">Den Link zum Logout finden Sie neben Ihren Benutzernamen oben
                                        rechts oder Sie klicken den angehängten Link</p>
                                    <a href="{{ route('logout') }}" class="card-link">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </div>
    </div>
</section>
