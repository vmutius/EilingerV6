<x-layout.eilinger>
    <main id="main">

        <section>
            <div class="container">
                <div class="section-title">
                    <h2>{{  __('regLog.forgottenPassword')  }}</h2>
                </div>

                <p>{{  __('regLog.forgottenPasswordNote')  }}</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email', app()->getLocale()) }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label class="form-label" for="email">{{  __('user.email')  }} *</label>
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
                            {{  __('regLog.resetPasswordLink')  }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-layout.eilinger>
