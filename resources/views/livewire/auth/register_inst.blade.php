<main id="main">

    <section>
        <div class="container">
            <div class="section-title">
                <h2>Registrierung für Verein/Institut</h2>
            </div>
            <div>
                <form wire:submit.prevent="registerInst">
                    @csrf
                    <div class="group">
                        <label class="form-label" for="username">Benutzername *</label>
                        <input wire:model.lazy="username" class="form-control @error('username') is-invalid @enderror @if(session('valid-username')) is-valid @endif" id="username" type="text"
                            placeholder="Wählen Sie einen Benutzernamen" autofocus autocomplete="off">
                        @error('username')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-username'))
                            <div class="valid-feedback">
                                {{ session('valid-username') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="nameInst">Name Verein/Organisation *</label>
                        <input wire:model.lazy="nameInst" class="form-control @error('nameInst') is-invalid @enderror @if(session('valid-nameInst')) is-valid @endif" id="name_inst" type="text"
                            placeholder="Firma Mustermann"  autofocus autocomplete="off">
                        @error('nameInst')
                            <div id="invalidnameInstFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-nameInst'))
                            <div class="valid-feedback">
                                {{ session('valid-nameInst') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="street">Strasse *</label>
                        <input wire:model.lazy="street" class="form-control @error('street') is-invalid @enderror @if(session('valid-street')) 
                            is-valid @endif" id="street" type="text" placeholder="Mustergasse"  autofocus autocomplete="off">
                        @error('street')
                            <div id="invalidstreetFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-street'))
                            <div class="valid-feedback">
                                {{ session('valid-street') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="number">Hausnummer </label>
                        <input wire:model.lazy="number" class="form-control @error('number') is-invalid @enderror @if(session('valid-number')) 
                            is-valid @endif" id="number" type="text" placeholder="12"  autofocus autocomplete="off">
                        @error('number')
                            <div id="invalidstreetFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-number'))
                            <div class="valid-feedback">
                                {{ session(['valid-number' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="plz">Postleitzahl *</label>
                        <input wire:model.lazy="plz" class="form-control @error('plz') is-invalid @enderror @if(session('valid-plz')) 
                            is-valid @endif" id="plz" type="number" placeholder="7000"  autofocus autocomplete="off">
                        @error('plz')
                            <div id="invalidstreetFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-plz'))
                            <div class="valid-feedback">
                                {{ session('valid-plz') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="town">Ort *</label>
                        <input wire:model.lazy="town" class="form-control @error('town') is-invalid @enderror @if(session('valid-town')) 
                            is-valid @endif" id="town" type="text" placeholder="Musterhausen"  autofocus autocomplete="off">
                        @error('town')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-town'))
                            <div class="valid-feedback">
                                {{ session('valid-town') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="country">Land *</label>
                        <select wire:model.lazy="country" class="form-select @error('country') is-invalid @enderror @if(session('valid-country')) 
                            is-valid @endif" id="country" type="text" placeholder="Schweiz"  autofocus autocomplete="off">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-country'))
                            <div class="valid-feedback">
                                {{ session('valid-country') }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="telefonInst">Telefonnummer der Organisation</label>
                        <input wire:model.lazy="telefonInst" class="form-control @error('telefonInst') is-invalid @enderror @if(session('valid-telefonInst')) 
                            is-valid @endif" id="telefonInst" type="text" placeholder="+41 81 123 4567"  autofocus autocomplete="off">
                        @error('telefonInst')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-telefonInst'))
                            <div class="valid-feedback">
                                {{ session(['valid-telefonInst' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="emailInst">Email der Organisation</label>
                        <input wire:model.lazy="emailInst" class="form-control @error('emailInst') is-invalid @enderror @if(session('valid-emailInst')) 
                            is-valid @endif" id="emailInst" type="email" placeholder="muster@muster.ch"  autofocus autocomplete="off">
                        @error('emailInst')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-emailInst'))
                            <div class="valid-feedback">
                                {{ session('valid-emailInst') }}
                            </div>
                        @endif
                    </div>


                    <div class="group">
                        <label class="form-label" for="website">Webseite</label>
                        <input wire:model.lazy="website" class="form-control @error('website') is-invalid @enderror @if(session('valid-website')) 
                            is-valid @endif" id="website" type="text" placeholder="https://www.musterfirma.ch"  autofocus autocomplete="off">
                        @error('website')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-website'))
                            <div class="valid-feedback">
                                {{ session(['valid-website' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="salutation">Anrede *</label>
                        <select wire:model.lazy="salutation" class="form-select @error('salutation') is-invalid @enderror @if(session('valid-salutation')) 
                            is-valid @endif" id="salutation" type="text" autofocus autocomplete="off">
                            <option disabled>Bitte Anrede auswählen</option>
                            @foreach (App\Models\User::SALUTATION as $key => $label)
                                <option value="{{ $key }}"
                                    {{ old('salutation', '') === (string) $key ? 'selected' : '' }}>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('salutation')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-salutation'))
                            <div class="valid-feedback">
                                {{ session(['valid-salutation', 'OK']) }}
                            </div>
                        @endif
                    </div>

                    
                    <div class="group">
                        <label class="form-label" for="firstname">Vorname der Kontaktperson *</label>
                        <input wire:model.lazy="firstname" class="form-control @error('firstname') is-invalid @enderror @if(session('valid-firstname')) 
                            is-valid @endif" id="firstname" type="text" placeholder="Max"  autofocus autocomplete="off">
                        @error('firstname')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-firstname'))
                            <div class="valid-feedback">
                                {{ session(['valid-firstname' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="lastname">Nachname der Kontaktperson *</label>
                        <input wire:model.lazy="lastname" class="form-control @error('lastname') is-invalid @enderror @if(session('valid-lastname')) 
                            is-valid @endif" id="lastname" type="text" placeholder="Muster"  autofocus autocomplete="off">
                        @error('lastname')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-lastname'))
                            <div class="valid-feedback">
                                {{ session(['valid-lastname' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="telefon">Telefonnummer der Kontaktperson *</label>
                        <input wire:model.lazy="telefon" class="form-control @error('telefon') is-invalid @enderror @if(session('valid-telefon')) 
                            is-valid @endif" id="telefon" type="text" placeholder="+41 81 123 4567"  autofocus autocomplete="off">
                        @error('telefon')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-telefon'))
                            <div class="valid-feedback">
                                {{ session(['valid-telefon' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                   <div class="group">
                        <label class="form-label" for="mobile">Mobile der Kontaktperson *</label>
                        <input wire:model.lazy="mobile" class="form-control @error('mobile') is-invalid @enderror @if(session('valid-mobile')) 
                            is-valid @endif" id="mobile" type="text" placeholder="+41 79 123 4567"  autofocus autocomplete="off">
                        @error('mobile')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-mobile'))
                            <div class="valid-feedback">
                                {{ session(['valid-mobile' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="email">Email Kontaktperson *</label>
                        <input wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror @if(session('valid-email')) 
                            is-valid @endif" id="email" type="email" placeholder="max@mustermann.ch"  autofocus autocomplete="off">
                        @error('email')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-email'))
                            <div class="valid-feedback">
                                {{ session(['valid-email' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                  
                    <div class="group">
                        <label class="form-label" for="password">Passwort *</label>
                        <input wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror @if(session('valid-password')) 
                            is-valid @endif" id="password" type="password" autofocus autocomplete="off">
                        @error('password')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-password'))
                            <div class="valid-feedback">
                                {{ session(['valid-password' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="password_confirmation">Passwort bestätigen*</label>
                        <input wire:model.lazy="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror @if(session('valid-password_confirmation')) 
                            is-valid @endif" id="password_confirmation" type="password" autofocus autocomplete="off">
                        @error('password_confirmation')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if(session()->has('valid-password_confirmation'))
                            <div class="valid-feedback">
                                {{ session(['valid-password_confirmation' => 'OK']) }}
                            </div>
                        @endif
                    </div>
                    </br>
                    <div class="form-check">
                        <label class="form-label" for="terms">
                            <input wire:model.lazy="terms" @error('terms') is-invalid @enderror @if(session('valid-terms')) 
                                is-valid @endif" id="terms" type="checkbox" autofocus autocomplete="off">
                            @error('terms')
                                <div id="invalidFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if(session()->has('valid-terms'))
                                <div class="valid-feedback">
                                    {{ session(['valid-terms' => 'OK']) }}
                                </div>
                            @endif
                            Ich akzeptiere die Nutzungsbedingungen.
                        </label>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>

        </div>

    </section>

</main><!-- End #main -->
