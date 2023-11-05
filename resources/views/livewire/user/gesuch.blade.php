<section class="home-section">
    <div class="text">Gesuche</div>
    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Antrag</th>
                    <th>Bereich</th>
                    <th>Antragsform</th>
                    <th>Status</th>
                    <th>Erstellt</th>
                    <th>Zuletzt Geändert</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($applications as $application)
                    <tr>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->bereich }}</td>
                        <td>{{ $application->form }}</td>
                        <td>{{ $application->appl_status }}</td>
                        <td>{{ $application->created_at ? $application->created_at->format('d.m.Y H:i') : null }}</td>
                        <td>{{ $application->updated_at ? $application->updated_at->format('d.m.Y H:i') : null }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary"
                               href="{{ route('user_antrag', ['application_id' => $application->id, 'locale'=> app()->getLocale()]) }}">Bearbeiten</a>
                            <a class="btn btn-sm btn-danger" wire:click="deleteApplication({{ $application->id }})">Löschen</a>
                            <a class="btn btn-sm btn-success"
                               href="{{ route('user_nachricht', ['application_id' => $application->id, 'locale'=> app()->getLocale()]) }}">Nachrichten
                                ansehen</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Keine Gesuche gefunden</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
