<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Benutzerübersicht</h2>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead >
            <tr>
                <th>Benutzername</th>
                <th>Nachname</th>
                <th>Vorame</th>
                <th>Email</th>
                <th width="280px">Action</th>
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
