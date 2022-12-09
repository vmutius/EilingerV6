<main id="main">

    <section>
        <div class="container">
            <div class="section-title">
                <h2>Registrierung für Privatperson</h2>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('register_privat') }}" method="POST">
                @csrf
                <input type="hidden" id="type" name="type" value="nat">

                <div class="group">
                    <label for="salutation">Anrede *</label>
                    <select id="salutation" name="salutation" class="form-select">
                        <option value="">-- Wählen Sie eine Option --</option>
                        @foreach (App\Models\User::SALUTATION as $key => $label)
                            <option value="{{ $key }}"
                                {{ old('salutation', '') === (string) $key ? 'selected' : '' }}>{{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('salutation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('salutation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group">
                    <label>Vorname *</label>
                    <input name="firstname" value="{{ old('firstname') }}" placeholder="Max" required
                        class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}">

                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group">
                    <label>Nachname *</label>
                    <input name="lastname" value="{{ old('lastname') }}" placeholder="Mustermann" required
                        class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}">

                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group">
                    <label>Strasse *</label>
                    <input name="street" value="{{ old('street') }}" placeholder="Musterstrasse" required
                        class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}">

                    @if ($errors->has('street'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group">
                    <label for="">Hausnummer</label>
                    <input name="number" value="{{ old('number') }}" placeholder="12a" required
                        class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}">

                    @if ($errors->has('number'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('number') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="group">
                    <label for="">Postleitzahl *</label>
                    <input name="plz" value="{{ old('plz') }}" placeholder="1223" required
                        class="form-control{{ $errors->has('plz') ? ' is-invalid' : '' }}">

                    @if ($errors->has('plz'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('plz') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group">
                    <label for="">Ort *</label>
                    <input name="town" value="{{ old('town') }}" placeholder="Musterort" required
                        class="form-control{{ $errors->has('town') ? ' is-invalid' : '' }}">
                </div>

                <div class="group">
                    <label for="country">Land *</label>
                    <select class="form-select">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="group">
                    <label for="">Telefon</label>
                    <input name="telefon" value="{{ old('telefon') }}" placeholder="41 81 123 4567" required
                        class="form-control{{ $errors->has('telefon') ? ' is-invalid' : '' }}">

                    @if ($errors->has('telefon'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telefon') }}</strong>
                        </span>
                    @endif
                    <div class="form-text">Bitte Ländercode mit eingeben</div>
                </div>

                <div class="group">
                    <label for="">Email * (gilt als Benutzername)</label>
                    <input name="email" value="{{ old('email') }}" placeholder="max@muster.ch" required
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="group form-password-toggle">
                    <label for="password">Passwort *</label>

                    <input type="password" class="form-control" name="password" id="password"
                        pattern="^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$" required>
                    <div class="form-text">Das Passwort muss mindestens acht Zeichen lang sein sowie jeweils ein
                        Zeichen der folgenden Typen enthalten: Grossbuchstaben, Kleinbuchstaben, Ziffern, andere
                        Zeichen.</div>
                </div>

                <div class="group form-password-toggle">
                    <label for="password">Passwort Bestätigen *</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        data-v-equal="#password" required>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="terms">Ich akzeptiere die Nutzungsbedingungen.</label>
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" required>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </form>
        </div>
        </div>

    </section>

</main><!-- End #main -->
