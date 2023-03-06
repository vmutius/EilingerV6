<section class="home-section">
    <div class="text">Benutzerprofil</div>
    <div class="home-content">
        <div class="card">
            <div class="card-header bg-secondary text-white">Benutzer</div>
            <div class="card-body">
                <form wire:submit.prevent="updateUser">
                    <div class="row g-3">
                        <div class="col-sm-2">
                            <label class="form-label" for="salutation">Anrede</label>
                            <select wire:model.lazy="user.salutation" class="form-select">
                                <option value="" disabled>Bitte Anrede auswählen</option>
                                @foreach (App\Models\User::SALUTATION as $key => $label)
                                    <option value="{{ $key }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <label class="form-label" for="firstname">Vorname</label>
                            <input wire:model.lazy="user.firstname" type="text" class="form-control" />
                        </div>
                        <div class="col-sm-5">
                            <label class="form-label" for="lastname">Nachname</label>
                            <input wire:model.lazy="user.lastname" type="text" class="form-control" />
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="country">Nationalität</label>
                            <select wire:model.lazy="user.nationality" class="form-select">
                                <option disabled>Bitte auswählen...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <label for="birthday" class="form-label">Geburtstag</label>
                            <input wire:model.lazy="user.birthday" class="form-control" type="date"
                                placeholder="DD.MM.YYYY" />
                        </div>
                        <div class="col-md-5">
                            <label class="form-label" for="email">Email</label>
                            <input wire:model.lazy="user.email" type="email" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label class="form-label" for="telefon">Telefon</label>
                            <input wire:model.lazy="user.telefon" type="text" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input wire:model.lazy="user.mobile" type="text" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="soz_vers_nr">Sozialversicherungsnummer</label>
                            <input wire:model.lazy="user.soz_vers_nr" type="text" class="form-control" />
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="in_ch_since">In der Schweiz seit (für Ausländer)</label>
                            <input wire:model.lazy="user.in_ch_since" type="text" class="form-control" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="bewilligung">Art der Bewilligung (für Ausländer)</label>
                            <select wire:model.lazy="user.bewilligung" name="bewilligung" class="form-select">
                                <option value="">-- Wählen Sie eine Option --</option>
                                @foreach (App\Models\User::BEWILLIGUNG as $key => $label)
                                    <option value="{{ $key }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="password">Passwort</label>
                            <input wire:model.lazy="user.password" type="password" class="form-control" />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="password_confirmation">Passwort Bestätigen</label>
                            <input wire:model.lazy="password_confirmation" type="password" class="form-control" />
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success">
                                <span class="align-middle d-sm-inline-block d-none">Speichern</span>
                            </button>
                        </div>
                    </div>
                    @if($successUser)
                        <div class="alert alert-success mt-2">Benutzer aktualisiert</div>
                    @endif
                </form>
            </div>
        </div>
    </div>

</section>
