<section class="home-section">
    <div class="text">{{  __('application.requests')  }}</div>
    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{  __('application.application')  }}</th>
                    <th>{{  __('application.bereich')  }}</th>
                    <th>{{  __('application.form')  }}</th>
                    <th>{{  __('application.status')  }}</th>
                    <th>{{  __('application.createdAt')  }}</th>
                    <th>{{  __('application.updatedAt')  }}</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($applications as $application)
                    <tr>
                        <td>{{ $application->name }}</td>
                        <td>{{ __('application.bereichs_name.' .$application->bereich->name) }}</td>
                        <td>{{ __('application.form_name.' .$application->form->name) }}</td>
                        <td>{{ __('application.status_name.' .$application->appl_status->name) }}</td>
                        <td>{{ $application->created_at ? $application->created_at->format('d.m.Y H:i') : null }}</td>
                        <td>{{ $application->updated_at ? $application->updated_at->format('d.m.Y H:i') : null }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary"
                               href="{{ route('user_antrag', ['application_id' => $application->id, 'locale'=> app()->getLocale()]) }}">{{  __('attributes.edit')  }}</a>
                            <a class="btn btn-sm btn-danger" wire:click="deleteApplication({{ $application->id }})">{{  __('attributes.delete')  }}</a>
                            <a class="btn btn-sm btn-success"
                               href="{{ route('user_nachricht', ['application_id' => $application->id, 'locale'=> app()->getLocale()]) }}">{{  __('attributes.showMessages')  }}</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">{{  __('application.no_requests')  }}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
