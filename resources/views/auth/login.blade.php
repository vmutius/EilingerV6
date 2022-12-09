<x-layouts-eilinger>

@section('content')

<main id="main">
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Willkommen auf dem Gesuchsportal der Eilinger Stiftung Schweiz </h2>
            </div>
            <p> Sie brauchen für Ihr Projekt oder Ihre berufliche Ausbildung finanzielle Unterstützung? Hier können Sie Ihre Förderanfrage an die Eilinger Stiftung Schweiz stellen. </p>
            <p>Bitte informieren Sie sich zunächst auf unserer Website über die Kriterien einer Förderung. </p>

            <strong>Hinweise zur Eingabe </strong>
            <p>Ihre Eingaben auf dem Gesuchsportal können Sie jederzeit zwischenspeichern und später ergänzen. Bitte vermeiden Sie es, mehrere Sitzungen im Gesuchsportal zu öffnen.
            Andersfalls besteht die Gefahr, dass Daten verlorengehen.</p>
            </br>
            </br>

            <h3>NEUES BENUTZERKONTO </h3>

            <p> Ich erstelle ein Benutzerkonto für mich als <strong><a href="{{ route('register_privat') }}">Privatperson</a></strong> (für ein Stipendiengesuch bitte diese Option wählen)
                ODER ich erstelle das Benutzerkonto für <strong><a href="{{route('register_inst')}}">einen Verein/eine Institution </a></strong>.</p>
                </br>
                </br>
                <h3>Ich bin bereits registriert </h3>

                <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-wrapper">
                            <label for="">{{ __('Password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="form-wrapper">
                            <button>{{ __('Login') }}</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-4">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Password reset?') }}</a>
                        @endif
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>                      
                        </div>
                    </div>
                    
                </div>
            </br>
                <p> Bei Vereinen und Organisationen ist der Benutzername die E-Mail-Adresse der Kontaktperson. </p>

            </br>


            </div>
  
</main><!-- End #main -->
@endsection
</x-layouts-eilinger>