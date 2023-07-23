<section class="home-section">
    <div class="text">Antragsübersicht</div>
    <p>Status "waiting, pending, complete</p>

    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Projektname</th>
                        <th>Bereich</th>
                        <th>Nachname</th>
                        <th>Vorame</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)
                        <tr>
                            <td>
                                <a href="{{ route('admin_antrag' , app()->getLocale(), $application->id) }}">{{ $application->name }} ({{ $application->appl_status }})</a>
                            </td>
                            <td>{{ $application->bereich }}</td>
                            <td>{{ $application->user->lastname }}</td>
                            <td>{{ $application->user->firstname }}</td>
                            <td>{{ $application->user->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Keine Anträge gefunden</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $applications->links() }}
        </div>
    </div>
</section>

