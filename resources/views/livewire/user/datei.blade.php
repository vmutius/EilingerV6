<section class="home-section">
    <div class="text">Dateien</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="addEnclosure()">Neue Datei hochladen</button>
                </div>
            </div>
            <hr class="border border-dark opacity-50">
            <x-notification/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Inhalt</th>
                        <th>Datei</th>
                        <th>Antrag</th>
                        <th>Erstellt</th>
                        <th>Zuletzt Geändert</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($enclosures as $enclosure)
                    @foreach($enclosure->getAttributes() as $column => $value)
                        @if(in_array($column, ['id', 'created_at', 'updated_at', 'application_id', 'remark', 'is_draft', 'deleted_at']))
                            @continue
                        @endif

                        @if($value)
                            <tr>
                                <td>{{ __('enclosure.'.$column) }}</td>
                                <td><a href="{{ asset('uploads/'.$enclosure->$column) }}"
                                       target="_blank">{{ $enclosure->$column }}</a></td>
                                <td>{{ $enclosure->application->name }}</td>
                                <td>{{ $enclosure->created_at ? $enclosure->created_at->format('d.m.Y H:i') : null }}</td>
                                <td>{{ $enclosure->updated_at ? $enclosure->updated_at->format('d.m.Y H:i') : null }}</td>

                            </tr>
                        @endif
                        @endforeach
                    @empty
                        <tr>
                            <td colspan="5">Keine Dateien gefunden</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="modal" @if ($showModal) style="display:block" @endif>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form wire:submit.prevent="saveEnclosure">
                        <div class="modal-header">
                            <h5 class="modal-title">Neue Datei hochladen</h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Antrag:
                            <br />
                            <select wire:model.lazy="application_id" class="form-select">
                                <option selected value="">Bitte auswählen...</option>
                                @foreach ($applications as $application)
                                    <option value="{{ $application->id }}">{{ $application->name }}</option>
                                @endforeach
                            </select>
                            @error('application_id')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror
                            <br />
                            Typ der Datei:
                            <br />
                            <select wire:model.lazy="column" class="form-select">
                                <option selected value="">Bitte auswählen...</option>
                                @foreach($this->columns as $column => $value)
                                    @if(in_array($value, ['id', 'created_at', 'updated_at', 'application_id', 'remark', 'is_draft', 'deleted_at']))
                                        @continue
                                    @endif
                                        <option value="{{ $value }}">{{ __('enclosure.'.$value) }}</option>
                                @endforeach
                            </select>
                            @error('column')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror

                            <br />
                            Datei:
                            <br />
                            <input wire:model.defer="file" class="form-control" type="file">
                            @error('form')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror
                            <br />
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
