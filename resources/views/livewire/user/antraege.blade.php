<section class="home-section">
    <div class="text">Anträge</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="addApplication()">Neuen Antrag
                        erstellen</button>
                </div>
            </div>
            <hr class="border border-dark opacity-50">
            <x-notification/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Antrag</th>
                        <th>Bereich</th>
                        <th>Antragsform</th>
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
                            <td>{{ $application->created_at ? $application->created_at->format('d.m.Y H:i') : null }}</td>
                            <td>{{ $application->updated_at ? $application->updated_at->format('d.m.Y H:i') : null }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('user_antrag', $application->id) }}">Bearbeiten</a>
                                <a class="btn btn-sm btn-danger" wire:click="deleteApplication({{ $application->id }})">Löschen</a>
                                <a class="btn btn-sm btn-success" href="{{ route('user_nachricht', $application->id) }}">Nachrichten ansehen</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Keine Anträge gefunden</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="modal" @if ($showModal) style="display:block" @endif>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form wire:submit.prevent="save">
                        <div class="modal-header">
                            <h5 class="modal-title">Neuen Antrag erstellen</h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Name des Projektes:
                            <br />
                            <input wire:model="name" class="form-control" />
                            @error('name')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                            <br />
                            Bereich des Projektes:
                            <br />

                            <select wire:model.lazy="bereich" class="form-select">
                                <option selected value="">Bitte auswählen...</option>
                                @foreach (App\Enums\Bereich::cases() as $bereich)
                                    <option value="{{ $bereich }}">{{ $bereich }}</option>
                                @endforeach
                            </select>
                            @error('bereich')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                           
                            <br />
                            Gewünschte Antragsform des Projektes:
                            <br />
                            <select wire:model.lazy="form" class="form-select">
                                <option selected value="">Bitte auswählen...</option>
                                @foreach (App\Enums\Form::cases()  as $form)
                                    <option value="{{ $form }}">{{ $form }}</option>
                                @endforeach
                            </select>
                            @error('form')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                            <br />
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">Erstantrag
                                    <input wire:model.lazy="is_first" class="form-check-input" type="radio" value = "1">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">Folgeantrag
                                    <input wire:model.lazy="is_first" class="form-check-input" type="radio" value = "0">
                                </label>
                            </div>
                            @error('is_first')
                            <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                            <button wire:click="close" type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
