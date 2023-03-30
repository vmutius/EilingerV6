<x-layouts.eilinger>

    @section('title', 'Registrieren/Einloggen')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Willkommen auf dem Gesuchsportal der Eilinger Stiftung </h2>
                </div>
                <p> Sie brauchen für Ihr Projekt oder Ihre berufliche Ausbildung finanzielle Unterstützung? Hier können
                    Sie
                    Ihre Förderanfrage an die Eilinger Stiftung stellen. </p>
                <p>Bitte informieren Sie sich zunächst auf unserer Website über die Kriterien einer Förderung. </p>

                <strong>Hinweise zur Eingabe </strong>
                <p>Ihre Eingaben auf dem Gesuchsportal können Sie jederzeit zwischenspeichern und später ergänzen. Bitte
                    vermeiden Sie es, mehrere Sitzungen im Gesuchsportal zu öffnen.
                    Andersfalls besteht die Gefahr, dass Daten verlorengehen.</p>
                </br>

                <h3>NEUES BENUTZERKONTO </h3>

                <p> Ich erstelle ein Benutzerkonto für mich als <strong><a href="{{ route('registerPrivat') }}">Privatperson</a></strong>
                    (für ein Stipendiengesuch bitte diese Option wählen) ODER ich erstelle das Benutzerkonto für
                    <strong><a href="{{ route('registerInst') }}">einen Verein/eine Institution </a></strong>.</p>
                <br/>
                <h3>Ich bin bereits registriert </h3>

                <form method="POST" action="{{ route('login') }}">
                    <div class="row g-3">
                        @csrf
                        <div class="col-md-4">
                            <label for="">{{ __('Email Address') }}</label>
                            <input name="email" id="email" type="email" class="form-control"
                                placeholder="name@example.com">
                            <x-input-error :messages="$errors->get('email')" />
                        </div>


                        <div class="col-md-4">
                            <label for="">{{ __('Password') }}</label>
                            <input name="password" id="password" type="password" class="form-control">
                            <x-input-error :messages="$errors->get('password')"/>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-colour-1">{{ __('Login') }}</button>
                        </div>



                        <div class="col-md-4">
                            <a class="btn btn-link" href="{{ route('password.request') }}">Passwort zurücksetzen?</a>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                <p> Vereine und Organisationen registrieren bzw. loggen sich bitte mit der E-Mail-Adresse der Kontaktperson ein. </p>
            </div>
        </section>
    </main><!-- End #main -->
</x-layouts.eilinger>
