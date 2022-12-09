<main id="main">

    <section>
        <div class="container">
            <div class="section-title">
                <h2>Registrierung für Verein/Institut</h2>
            </div>
            <div>
                <form wire:submit.prevent="register">
                    @csrf
                    <div class="group">
                        <label for="">Benutzername *</label>
                        <input wire:model='username' type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="group">
                        <label for="">Name Verein/Organisation *</label>
                        <input wire:model='name_inst' type="text" class="form-control" name="name_inst" id="name_inst" 
                            placeholder="Firma Mustermann"  required>
                    </div>
                    <div class="group">
                        <label for="">Strasse *</label>
                        <input wire:model='street' type="text" class="form-control" name="street" id="street"
                            placeholder="Mustermannstrasse" value="<?php if (isset($_POST['street'])) {
                                echo $_POST['street'];
                            } ?>" data-v-min-length="2"
                            data-v-max-length="45"required>
                    </div>
                    <div class="group">
                        <label for="">Hausnummer</label>
                        <input wire:model ='number' type="text" class="form-control" name="number" id="number"
                            placeholder="Mustermannstrasse" value="<?php if (isset($_POST['number'])) {
                                echo $_POST['number'];
                            } ?>">
                    </div>
                    <div class="group">
                        <label for="">Postleitzahl *</label>
                        <input wire:model ='plz' type="text" class="form-control" name="plz" id="plz" placeholder="1234"
                            value="<?php if (isset($_POST['plz'])) {
                                echo $_POST['plz'];
                            } ?>" data-v-min-length="3" data-v-max-length="20" required>
                    </div>
                    <div class="group">
                        <label for="">Ort *</label>
                        <input wire:modal ='town' type="text" class="form-control" name="town" id="town" placeholder="Musterort"
                            value="<?php if (isset($_POST['town'])) {
                                echo $_POST['town'];
                            } ?>" data-v-min-length="3" data-v-max-length="50" required>
                    </div>
                    <div class="group">
                        <label for="country">Land *</label>
                        <select wire:model='country' class="form-select">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="group">
                        <label for="">Telefon *</label>
                        <input wire:model='telefon_inst' type="text" class="form-control" name="telefon_inst" id="telefon_inst"
                            placeholder="+41 81 123 4567" value="<?php if (isset($_POST['telefon_inst'])) {
                                echo $_POST['telefon_inst'];
                            } ?>" data-v-min-length="7"
                            data-v-max-length="20" required>
                        <div class="form-text">Bitte Ländercode mit eingeben</div>
                    </div>
                    <div class="group">
                        <label for="">Email *</label>
                        <input wire:model='email_inst' type="email" class="form-control" name="email_inst" id="email_inst"
                            placeholder="max@firma_mustermann.ch" value="<?php if (isset($_POST['email_inst'])) {
                                echo $_POST['email_inst'];
                            } ?>" data-v-min-length="6"
                            data-v-max-length="100" required>
                    </div>
                    <div class="group">
                        <label for="">Webseite</label>
                        <input wire:model='website' type="text" class="form-control" name="website" id="website"
                            placeholder="https://www.firma_mustermann.ch">
                    </div>
                    <div class="group">
                        <label for="salutation">Anrede *</label>
                        <select wire_model='salutation' id="salutation" name="salutation" class="form-select">
                            <option value="">-- Wählen Sie eine Option --</option>
                            @foreach (App\Models\User::SALUTATION as $key => $label)
                                <option value="{{ $key }}"
                                    {{ old('salutation', '') === (string) $key ? 'selected' : '' }}>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="group">
                        <label for="">Vorname Kontaktperson *</label>
                        <input wire:model = 'firstname' type="text" class="form-control" name="firstname" id="firstname" placeholder="Max"
                            value="<?php if (isset($_POST['firstname'])) {
                                echo $_POST['firstname'];
                            } ?>" data-v-min-length="3" data-v-max-length="255" required>
                    </div>
                    <div class="group">
                        <label for="">Nachname Kontaktperson *</label>
                        <input wire:model='lastname' type="text" class="form-control" name="lastname" id="lastname"
                            placeholder="Mustermann" value="<?php if (isset($_POST['lastname'])) {
                                echo $_POST['lastname'];
                            } ?>" data-v-min-length="3"
                            data-v-max-length="255" required>
                    </div>
                    <div class="group">
                        <label for="">Telefon Kontaktperson</label>
                        <input wire:model ='telefon' type="text" class="form-control" name="telefon" id="telefon"
                            placeholder="+41 81 123 4567" value="<?php if (isset($_POST['telefon'])) {
                                echo $_POST['telefon'];
                            } ?>">
                        <div class="form-text">Bitte Ländercode mit eingeben</div>
                    </div>
                    <div class="group">
                        <label for="">Mobil Kontaktperson</label>
                        <input wire:model = 'mobile' type="text" class="form-control" name="mobile" id="mobile"
                            placeholder="++41 77 123 4567" value="<?php if (isset($_POST['mobile'])) {
                                echo $_POST['mobile'];
                            } ?>">
                        <div class="form-text">Ländercode mit eingeben</div>
                    </div>
                    <div class="group">
                        <label for="">Email Kontaktperson (gilt als Benutzername)</label>
                        <input wire:model='email' type="email" class="form-control" name="email" id="email"
                            placeholder="max@mustermann.ch" value="<?php if (isset($_POST['email'])) {
                                echo $_POST['email'];
                            } ?>" required>
                    </div>
                    <div class="group">
                        <label for="password">Passwort</label>
                        <input wire:model='password' type="password" class="form-control" name="password" id="password"
                            pattern="^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$" required>
                        <div class="form-text">Das Passwort muss mindestens acht Zeichen lang sein sowie jeweils ein
                            Zeichen der folgenden Typen enthalten: Grossbuchstaben, Kleinbuchstaben, Ziffern, andere
                            Zeichen.</div>
                    </div>
                    <div class="group">
                        <label for="password">Passwort Bestätigen</label>
                        <input wire:model='password_confirmation' type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" required>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="terms">Ich akzeptiere die Nutzungsbedingungen.</label>
                        <input type="checkbox" class="form-check-input" id="terms" required>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>

        </div>

    </section>

</main><!-- End #main -->
