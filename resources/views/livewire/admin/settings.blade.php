<section class="home-section">
    <div class="text">Einstellungen</div>
   
    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="addAdmin()">Neuen Admin
                        erstellen</button>
                </div>
            </div>
            <hr />
            <table class="table table-striped" id="sortTable">
                <thead>
                    <tr>
                        <th>Benutzername</th>
                        <th>Nachname</th>
                        <th>Vorname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal" @if ($showModal) style="display:block" @endif>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form wire:submit.prevent="save">
                        <div class="modal-header">
                            <h5 class="modal-title">Neuen Admin erstellen</h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Benutzername:
                            <input wire:model="username" class="form-control" />
                            @error('username')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                            
                            Anrede:
                            <select wire:model.lazy="salutation" class="form-select" type="text">
                            <option selected>Bitte Anrede auswählen...</option>
                                @foreach (App\Models\User::SALUTATION as $key => $label)
                                    <option value="{{ $key }}"
                                        {{ old('salutation', '') === (string) $key ? 'selected' : '' }}>{{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            @error('salutation')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror

                            Nachname:
                            <input wire:model="lastname" class="form-control" />
                            @error('lastname')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                           
                            Vorname:
                            <input wire:model="firstname" class="form-control" />
                            @error('firstname')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror

                            Telefon:
                            <input wire:model="telefon" class="form-control" />
                            @error('telefon')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                            
                            Email:
                            <input wire:model="email" class="form-control" />
                            @error('email')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror

                            Password:
                            <input wire:model="password" class="form-control" />
                            @error('password')
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

