<section class="home-section">
    <div class="text">Übersicht</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="addApplication()">Neuen Antrag erstellen</button>
                </div>
            </div>
            <hr/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Antrag</th>
                        <th>Bereich</th>
                        <th>Erzeugt</th>
                        <th>Geändert</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr>
                            <td>{{ $application->id }}</td>
                            <td>{{ $application->bereich }}</td>
                            <td>{{ $application->created_at }}</td>
                            <td>{{ $application->updated_at }}</td>
                            <td>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Keine Benutzer gefunden</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

