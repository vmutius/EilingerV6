<section class="home-section">
    <div class="text">{{  __('file.title')  }}</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="addEnclosure()">{{  __('file.newFile')  }}</button>
                </div>
            </div>
            <hr class="border border-dark opacity-50">
            <x-notification/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{  __('file.content')  }}</th>
                        <th>{{  __('file.file')  }}</th>
                        <th>{{  __('file.application')  }}</th>
                        <th>{{  __('file.createdAt')  }}</th>
                        <th>{{  __('file.lastUpdated')  }}</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($applications as $application)
                    @forelse ($application->enclosures as $enclosure)
                        @foreach($enclosure->getAttributes() as $column => $value)
                            @if(in_array($column, ['id', 'created_at', 'updated_at', 'application_id', 'remark', 'is_draft', 'deleted_at']))
                                @continue
                            @endif


                            @if($value && !\Illuminate\Support\Str::endsWith($column, 'SendLater') )
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
                                <td colspan="5">{{  __('file.noFiles')  }}</td>
                            </tr>
                        @endforelse
                @empty
                    <tr>
                        <td colspan="5">{{  __('file.noApplication')  }}</td>
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
                            <h5 class="modal-title">{{  __('file.newFile')  }}</h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{  __('file.application')  }}:
                            <br />
                            <select wire:model.lazy="application_id" class="form-select">
                                <option hidden>{{  __('attributes.please_select')  }}</option>
                                @foreach ($applications as $application)
                                    <option value="{{ $application->id }}">{{ $application->name }}</option>
                                @endforeach
                            </select>
                            @error('application_id')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror
                            <br />
                            {{  __('file.content')  }}:
                            <br />
                            <select wire:model.lazy="column" class="form-select">
                                <option hidden="">{{  __('attributes.please_select')  }}</option>
                                @foreach($this->columns as $column => $value)
                                    @if(in_array($value, ['id', 'created_at', 'updated_at', 'application_id', 'remark', 'is_draft', 'deleted_at']))
                                        @continue
                                    @endif
                                    @if(!\Illuminate\Support\Str::endsWith($value, 'SendLater') )
                                        <option value="{{ $value }}">{{ __('enclosure.'.$value) }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('column')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror

                            <br />
                            {{  __('file.file')  }}:
                            <br />
                            <input wire:model.defer="file" class="form-control" type="file">
                            @error('form')
                                <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                            @enderror
                            <br />
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{  __('attributes.save')  }}</button>
                            <button wire:click="close" type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{  __('attributes.close')  }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Listen for the 'fileUploaded' event and refresh the component.
            Livewire.on('fileUploaded', () => {
                Livewire.emit('refreshComponent');
            });
        </script>
    </div>
</section>
