<x-layouts.eilinger>
    <main id="main">

        <section>
            <div class="container">
                <div class="section-title">
                    <h2>Passwort vergessen?</h2>
                </div>

                <p>Sie haben Ihr Passwort vergessen? Kein Problem. Geben Sie Ihre Email Adress ein und wir senden Ihnen eine Link, um das Passwort neu zu setzen.</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email', app()->getLocale()) }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label class="form-label" for="email">Email *</label>
                        <input name='email' class="form-control @error('email') is-invalid @enderror @if (session('valid-email')) is-valid @endif" id="email" type="text">
                    @error('email')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-email'))
                        <div class="valid-feedback">
                            {{ session('valid-email') }}
                        </div>
                    @endif
                    </div>

                    <div class="col-md-12 text-center">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-layouts.eilinger>
