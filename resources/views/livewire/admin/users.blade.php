<section class="home-section">
    <div class="text">Benutzerübersicht</div>

    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-3">
                    <input wire:model="searchUsername" class="form-control" type "text"
                        placeholder="Suchen nach Benutzernamen">
                </div>
                <div class="col-md-3">
                    <input wire:model="searchUserEmail" class="form-control" type "text"
                        placeholder="Suchen nach Benutzer Email">
                </div>
                <div class="col-md-3">
                    <input wire:model="searchStatusProjekt" class="form-control" type "text"
                        placeholder="Suchen nach Projekt Status">
                </div>
            </div>
            <hr />
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Benutzername</th>
                        <th>Nachname</th>
                        <th>Vorame</th>
                        <th>Email</th>
                        <th>Anträge</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach ($user->applications as $application)
                                    <div class="row">
                                        <a href="{{ route('admin_antrag', $application->id) }}">{{ $application->name }} ({{ $application->appl_status }})</a>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Keine Benutzer gefunden</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</section>
